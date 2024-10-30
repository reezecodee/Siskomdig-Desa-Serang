<?php

namespace App\Http\Controllers\Admin\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\AppInfo\AppUpdateRequest;
use App\Models\Application;

class ManageApplicationController extends Controller
{
    public function updateAppInfo(AppUpdateRequest $request)
    {
        $this->checkDiskSpace();

        $validatedData = $request->validated();
        $applicationsCount = Application::count();

        if ($applicationsCount > 0) {
            $application = Application::latest()->first();

            if ($request->hasFile('favicon')) {
                // Hapus favicon lama jika ada
                if ($application->favicon && file_exists(public_path($application->favicon))) {
                    unlink(public_path($application->favicon));
                }

                // Ambil ekstensi file yang diupload
                $extension = $request->file('favicon')->getClientOriginalExtension();
                $faviconName = 'favicon.' . $extension;

                // Simpan file dengan ekstensi yang sesuai
                $faviconPath = $request->file('favicon')->move(public_path(), $faviconName);
                $validatedData['favicon'] = $faviconName;
            }

            if ($request->hasFile('logo')) {
                // Hapus logo lama jika ada
                if ($application->logo && file_exists(public_path($application->logo))) {
                    unlink(public_path($application->logo));
                }

                // Ambil ekstensi file yang diupload
                $extension = $request->file('logo')->getClientOriginalExtension();
                $logoName = 'logo.' . $extension;

                // Simpan file dengan ekstensi yang sesuai
                $logoPath = $request->file('logo')->move(public_path(), $logoName);
                $validatedData['logo'] = $logoName; // Fix: harusnya $logoName, bukan $faviconName
            }

            // Update data aplikasi
            $application->update($validatedData);
        } else {
            if ($request->hasFile('favicon')) {
                // Ambil ekstensi file yang diupload
                $extension = $request->file('favicon')->getClientOriginalExtension();
                $faviconName = 'favicon.' . $extension;

                // Simpan file dengan ekstensi yang sesuai
                $faviconPath = $request->file('favicon')->move(public_path(), $faviconName);
                $validatedData['favicon'] = $faviconName;
            }

            if ($request->hasFile('logo')) {
                // Ambil ekstensi file yang diupload
                $extension = $request->file('logo')->getClientOriginalExtension();
                $logoName = 'logo.' . $extension;

                // Simpan file dengan ekstensi yang sesuai
                $logoPath = $request->file('logo')->move(public_path(), $logoName);
                $validatedData['logo'] = $logoName;
            }

            // Buat data aplikasi baru
            Application::create($validatedData);
        }

        return back()->withSuccess('Berhasil menyimpan data informasi aplikasi');
    }
}
