<?php

namespace App\Http\Controllers\Admin\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Organization\OrganizationRequest;
use App\Models\OrganizationStructure;

class ManageOrganizationController extends Controller
{
    public function editOrganization(OrganizationRequest $request)
    {
        $this->checkDiskSpace();

        $validatedData = $request->validated();

        $organizationStructure = OrganizationStructure::latest()->first();

        if ($request->hasFile('gambar')) {
            if ($organizationStructure && $organizationStructure->gambar) {
                $oldImagePath = public_path('storage/images/' . $organizationStructure->gambar);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }

            $image = $request->file('gambar');
            $fileName = 'struktur-' . uniqid() . '.' . $image->getClientOriginalExtension();

            $image->move(public_path('storage/images'), $fileName);

            $validatedData['gambar'] = $fileName;
        }

        if (OrganizationStructure::count() > 0) {
            $organizationStructure->update($validatedData);
        } else {
            OrganizationStructure::create($validatedData);
        }

        return back()->withSuccess('Berhasil menyimpan gambar struktur organisasi komunitas');
    }
}
