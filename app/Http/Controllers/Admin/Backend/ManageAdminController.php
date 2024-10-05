<?php

namespace App\Http\Controllers\Admin\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AdminRequest;
use App\Models\User;

class ManageAdminController extends Controller
{
    public function addAdmin(AdminRequest $request)
    {
        $validatedData = $request->validated();
        $validatedData['password'] = bcrypt($validatedData['password']);
        User::create($validatedData);

        return back()->withSuccess('Berhasil mendaftarkan Admin baru');
    }

    public function deleteAdmin($id)
    {
        $admin = User::findOrFail($id);
        $admin->delete();

        return back()->withSuccess('Berhasil menghapus data Admin');
    }
}
