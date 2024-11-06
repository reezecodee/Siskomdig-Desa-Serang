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
                if ($application->favicon && file_exists(public_path($application->favicon))) {
                    unlink(public_path($application->favicon));
                }

                $extension = $request->file('favicon')->getClientOriginalExtension();
                $faviconName = 'favicon.' . $extension;

                $request->file('favicon')->move(public_path(), $faviconName);
                $validatedData['favicon'] = $faviconName;
            }

            if ($request->hasFile('logo')) {
                if ($application->logo && file_exists(public_path($application->logo))) {
                    unlink(public_path($application->logo));
                }

                $extension = $request->file('logo')->getClientOriginalExtension();
                $logoName = 'logo.' . $extension;

                $request->file('logo')->move(public_path(), $logoName);
                $validatedData['logo'] = $logoName;
            }

            $application->update($validatedData);
        } else {
            if ($request->hasFile('favicon')) {
                $extension = $request->file('favicon')->getClientOriginalExtension();
                $faviconName = 'favicon.' . $extension;

                $request->file('favicon')->move(public_path(), $faviconName);
                $validatedData['favicon'] = $faviconName;
            }

            if ($request->hasFile('logo')) {
                $extension = $request->file('logo')->getClientOriginalExtension();
                $logoName = 'logo.' . $extension;

                $request->file('logo')->move(public_path(), $logoName);
                $validatedData['logo'] = $logoName;
            }

            Application::create($validatedData);
        }

        return back()->withSuccess('Berhasil menyimpan data informasi aplikasi');
    }
}
