<?php

namespace App\Http\Controllers\Admin\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Profile\EditProfileRequest;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

class ManageProfileController extends Controller
{
    public function editProfile(EditProfileRequest $request, $id)
    {
        $this->checkDiskSpace();

        $validatedData = $request->validated();
        $user = User::findOrFail($id);

        $user->update($validatedData);
        return back()->withSuccess('Berhasil memperbarui data profile');
    }
}
