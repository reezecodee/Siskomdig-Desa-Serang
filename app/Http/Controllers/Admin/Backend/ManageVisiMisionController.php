<?php

namespace App\Http\Controllers\Admin\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\VisiMision\VisiMisionRequest;
use App\Models\VisiMision;

class ManageVisiMisionController extends Controller
{
    public function editVisiMision(VisiMisionRequest $request)
    {
        $this->checkDiskSpace();

        $validatedData = $request->validated();

        $visiMisionCount = VisiMision::count();
        if ($visiMisionCount > 0) {
            $visiMision = VisiMision::latest()->first();
            $visiMision->update($validatedData);
        } else {
            VisiMision::create($validatedData);
        }

        return back()->withSuccess('Berhasil menyimpan visi & misi komunitas');
    }
}
