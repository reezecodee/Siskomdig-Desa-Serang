<?php

namespace App\Http\Controllers\Admin\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Information\EditInformationRequest;
use App\Http\Requests\Information\InformationRequest;
use App\Models\Information;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ManageInformationController extends Controller
{
    public function addInformation(InformationRequest $request)
    {
        $this->checkDiskSpace();

        $validatedData = $request->validated();

        if ($request->hasFile('gambar')) {
            $gambarFile = $request->file('gambar');
            $gambarFileName = uniqid() . '.' . $gambarFile->getClientOriginalExtension();
            $gambarFile->storeAs('images', $gambarFileName, 'public');
            $validatedData['gambar'] = $gambarFileName;
        }

        $validatedData['admin_id'] = Auth::user()->id;

        Information::create($validatedData);
        return back()->withSuccess('Berhasil menambahkan informasi baru.');
    }

    public function editInformation(EditInformationRequest $request, $id)
    {
        $this->checkDiskSpace();

        $validatedData = $request->validated();
        $information = Information::findOrFail($id);

        if ($request->hasFile('gambar')) {
            if ($information->gambar && Storage::disk('public')->exists('images/' . $information->gambar)) {
                Storage::disk('public')->delete('images/' . $information->gambar);
            }

            $gambarFile = $request->file('gambar');
            $gambarFileName = uniqid() . '.' . $gambarFile->getClientOriginalExtension();
            $gambarFile->storeAs('images', $gambarFileName, 'public');
            $validatedData['gambar'] = $gambarFileName;
        }

        $information->update($validatedData);
        return back()->withSuccess('Berhasil memperbarui data informasi.');
    }

    public function deleteInformation($id)
    {
        $information = Information::findOrFail($id);

        if ($information->gambar && Storage::disk('public')->exists('images/' . $information->gambar)) {
            Storage::disk('public')->delete('images/' . $information->gambar);
        }

        $information->delete();
        return back()->withSuccess('Berhasil menghapus data informasi');
    }
}
