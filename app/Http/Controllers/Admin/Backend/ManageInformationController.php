<?php

namespace App\Http\Controllers\Admin\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Information\EditInformationRequest;
use App\Http\Requests\Information\InformationRequest;
use App\Models\Information;
use Illuminate\Support\Facades\Storage;

class ManageInformationController extends Controller
{
    public function addInformation(InformationRequest $request)
    {
        $validatedData = $request->validated();
        $thumbnailFile = $request->file('thumbnail');
        $thumbnailFileName = uniqid() . '.' . $thumbnailFile->getClientOriginalExtension();
        $thumbnailFile->storeAs('images', $thumbnailFileName, 'public');
        $validatedData['thumbnail'] = $thumbnailFileName;
        $validatedData['admin_id'] = '622b6392-8270-11ef-a5cc-6c64b14d6c35';

        Information::create($validatedData);
        return back()->withSuccess('Berhasil menambahkan informasi baru.');
    }

    public function editInformation(EditInformationRequest $request, $id)
    {
        $validatedData = $request->validated();
        $information = Information::findOrFail($id);

        if ($request->hasFile('thumbnail')) {
            if ($information->thumbnail && Storage::disk('public')->exists('images/' . $information->thumbnail)) {
                Storage::disk('public')->delete('images/' . $information->thumbnail);
            }

            $thumbnailFile = $request->file('thumbnail');
            $thumbnailFileName = uniqid() . '.' . $thumbnailFile->getClientOriginalExtension();
            $thumbnailFile->storeAs('images', $thumbnailFileName, 'public');
            $validatedData['thumbnail'] = $thumbnailFileName;
        }

        $information->update($validatedData);
        return back()->withSuccess('Berhasil memperbarui data informasi.');
    }

    public function deleteInformation($id)
    {
        $information = Information::findOrFail($id);

        if ($information->thumbnail && Storage::disk('public')->exists('images/' . $information->thumbnail)) {
            Storage::disk('public')->delete('images/' . $information->thumbnail);
        }

        $information->delete();
        return back()->withSuccess('Berhasil menghapus data informasi');
    }
}
