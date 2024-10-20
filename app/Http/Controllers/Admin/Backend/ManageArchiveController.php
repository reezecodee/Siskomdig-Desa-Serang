<?php

namespace App\Http\Controllers\Admin\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Archive\ArchiveRequest;
use App\Models\Archive;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use ZipArchive;

class ManageArchiveController extends Controller
{
    public function addArchive(ArchiveRequest $request)
    {
        $validatedData = $request->validated();

        $thumbnailFile = $request->file('thumbnail_arsip');
        $thumbnailFileName = uniqid() . '.' . $thumbnailFile->getClientOriginalExtension();
        $thumbnailFile->storeAs('images', $thumbnailFileName, 'public');
        $validatedData['thumbnail_arsip'] = $thumbnailFileName;

        $validatedData['file_zip'] = $this->generateZIPFile($validatedData['files'], uniqid());

        Archive::create($validatedData);
        return redirect()->route('show.activityArchive')->withSuccess('Berhasil menambahkan arsip baru baru.');
    }

    public function deleteArchive($id)
    {
        $archive = Archive::findOrFail($id);

        if ($archive->thumbnail_arsip && Storage::disk('public')->exists('images/' . $archive->thumbnail_arsip)) {
            Storage::disk('public')->delete('images/' . $archive->thumbnail_arsip);
        }

        if ($archive->file_zip && Storage::disk('public')->exists('archives/' . $archive->file_zip)) {
            Storage::disk('public')->delete('archives/' . $archive->file_zip);
        }

        $archive->delete();
        return back()->withSuccess('Berhasil menghapus data arsip');
    }

    private function generateZIPFile($files, $zipName)
    {
        // Nama file ZIP yang akan dibuat
        $zipFileName = "{$zipName}-" . uniqid() . ".zip";

        // Lokasi penyimpanan file ZIP di storage/app/public/archives
        $zipFilePath = Storage::disk('public')->path('archives/' . $zipFileName);

        // Pastikan direktori storage/app/public/archives ada
        if (!Storage::disk('public')->exists('archives')) {
            Storage::disk('public')->makeDirectory('archives');
        }

        // Buat folder temp unik untuk setiap proses (misalnya: 'temp/[unique_id]')
        $uniqueTempDir = 'temp/' . uniqid(); // Membuat folder temp unik menggunakan uniqid()
        Storage::disk('public')->makeDirectory($uniqueTempDir); // Buat folder temp unik

        // Membuat instance ZipArchive
        $zip = new ZipArchive;

        // Membuka atau membuat file ZIP
        if ($zip->open($zipFilePath, ZipArchive::CREATE) === TRUE) {
            // Mendapatkan semua file yang diupload dari request
            foreach ($files as $file) {
                // Simpan file di folder temp yang unik di public
                $filePath = $file->store($uniqueTempDir, 'public'); // Simpan di folder temp unik
                $absoluteFilePath = Storage::disk('public')->path($filePath); // Mendapatkan path absolut

                // Cek apakah file sementara ada dan bisa diakses
                if (File::exists($absoluteFilePath)) {
                    // Menambahkan file ke dalam arsip ZIP
                    $zip->addFile($absoluteFilePath, $file->getClientOriginalName());
                } else {
                    // Jika file tidak ditemukan, log atau return error untuk debugging
                    return back()->withErrors('Gagal memproses permintaan. Silakan coba lagi nanti.');
                }
            }

            try {
                // Menutup arsip ZIP
                $zip->close();

                // Hapus file sementara setelah ditambahkan ke ZIP
                Storage::disk('public')->deleteDirectory($uniqueTempDir); // Hapus folder temp unik
            } catch (\Exception $e) {
                return back()->withErrors('Gagal memproses permintaan. Silakan coba lagi nanti.');
            }

            return $zipFileName;
        } else {
            return back()->withErrors('Gagal memproses permintaan. Silakan coba lagi nanti.');
        }
    }
}
