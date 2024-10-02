<?php

namespace App\Http\Controllers\Admin\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\AppInfo\AppUpdateRequest;
use App\Models\Application;

class ManageApplicationController extends Controller
{
    public function updateAppInfo(AppUpdateRequest $request)
    {
        $validatedData = $request->validated();

        $applicationsCount = Application::count();

        if ($applicationsCount > 0) {
            $application = Application::latest()->first();

            if ($request->hasFile('favicon')) {
                if ($application->favicon && file_exists(public_path($application->favicon))) {
                    unlink(public_path($application->favicon));
                }

                $faviconPath = $request->file('favicon')->move(public_path(), 'favicon.ico');
                $validatedData['favicon'] = 'favicon.ico';
            }

            $application->update($validatedData);
        } else {
            if ($request->hasFile('favicon')) {
                $faviconPath = $request->file('favicon')->move(public_path(), 'favicon.ico');
                $validatedData['favicon'] = 'favicon.ico';
            }

            Application::create($validatedData);
        }

        return back()->withSuccess('Berhasil menyimpan data informasi aplikasi');
    }
}
