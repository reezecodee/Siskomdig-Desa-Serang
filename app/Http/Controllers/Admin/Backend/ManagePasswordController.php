<?php

namespace App\Http\Controllers\Admin\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Password\ChangePasswordRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ManagePasswordController extends Controller
{
    public function changePassword(ChangePasswordRequest $request)
    {
        $validatedData = $request->validated();

        $user = User::find(Auth::user()->id);

        if (!Hash::check($validatedData['current_password'], $user->password)) {
            return back()->withErrors(['error' => 'Password saat ini tidak sesuai.']);
        }

        $user->password = bcrypt($validatedData['new_password']);
        $user->save();

        return back()->withSuccess('Password berhasil diubah.');
    }
}
