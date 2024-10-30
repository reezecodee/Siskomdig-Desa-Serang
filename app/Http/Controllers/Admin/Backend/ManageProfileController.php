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

        if ($request->hasFile('avatar')) {
            $avatarFile = $request->file('avatar');
            $avatarFileName = uniqid() . '.' . $avatarFile->getClientOriginalExtension();
            $avatarFile->storeAs('profiles', $avatarFileName, 'public');
            $validatedData['avatar'] = $avatarFileName;
        }

        $user->update($validatedData);
        return back()->withSuccess('Berhasil memperbarui data profile');
    }

    public function deleteAvatar($id)
    {
        $user = User::findOrFail($id);

        if ($user->avatar && Storage::disk('public')->exists('profiles/' . $user->avatar)) {
            Storage::disk('public')->delete('profiles/' . $user->avatar);
        }

        $user->update(['avatar' => null]);

        return back()->withSuccess('Berhasil menghapus avatar');
    }
}
