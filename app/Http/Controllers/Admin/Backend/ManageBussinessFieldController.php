<?php

namespace App\Http\Controllers\Admin\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Business\BusinessFieldRequest;
use App\Models\BusinessField;
use Illuminate\Http\Request;

class ManageBussinessFieldController extends Controller
{
    public function addBusinessField(BusinessFieldRequest $request)
    {
        $this->checkDiskSpace();

        $validatedData = $request->validated();

        $business = BusinessField::create($validatedData);
        return back()->withSuccess("Berhasil menambahkan \"{$business->nama_bidang_usaha}\" sabagai bidang usaha baru.");
    }

    public function editBusinessField(BusinessFieldRequest $request, $id)
    {
        $business = BusinessField::findOrFail($id);
        $businessName = $business->nama_bidang_usaha;
        $validatedData = $request->validated();

        $business->update($validatedData);
        return back()->withSuccess("Berhasil memperbarui data bidang usaha \"{$businessName}\" menjadi \"{$validatedData['nama_bidang_usaha']}\".");
    }

    public function deleteBusinessField($id)
    {
        $business = BusinessField::findOrFail($id);
        $business->delete();

        return back()->withSuccess("Berhasil bidang usaha \"{$business->nama_bidang_usaha}\" dari daftar.");
    }
}
