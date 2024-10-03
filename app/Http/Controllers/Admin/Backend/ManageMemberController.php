<?php

namespace App\Http\Controllers\Admin\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Member\MemberRequest;
use App\Models\UmkmMember;
use Illuminate\Support\Facades\Storage;

class ManageMemberController extends Controller
{
    public function addMember(MemberRequest $request)
    {
        $validatedData = $request->validated();

        if ($request->hasFile('avatar')) {
            $avatarFile = $request->file('avatar');
            $avatarFileName = uniqid() . '.' . $avatarFile->getClientOriginalExtension();
            $avatarFile->storeAs('profiles', $avatarFileName, 'public');
            $validatedData['avatar'] = $avatarFileName;
        }

        UmkmMember::create($validatedData);
        return back()->withSuccess('Berhasil menambahkan member UMKM baru.');
    }

    public function editMember(MemberRequest $request, $id)
    {
        $validatedData = $request->validated();
        $member = UmkmMember::findOrFail($id);

        if ($request->hasFile('avatar')) {
            if ($member->avatar && Storage::disk('public')->exists('profiles/' . $member->avatar)) {
                Storage::disk('public')->delete('profiles/' . $member->avatar);
            }
            
            $avatarFile = $request->file('avatar');
            $avatarFileName = uniqid() . '.' . $avatarFile->getClientOriginalExtension();
            $avatarFile->storeAs('profiles', $avatarFileName, 'public');
            $validatedData['avatar'] = $avatarFileName;
        }

        $member->update($validatedData);
        return back()->withSuccess('Berhasil memperbarui data member UMKM.');
    }

    public function deleteMember($id)
    {
        $member = UmkmMember::findOrFail($id);

        if ($member->avatar && Storage::disk('public')->exists('profiles/' . $member->avatar)) {
            Storage::disk('public')->delete('profiles/' . $member->avatar);
        }

        $member->delete();

        return back()->withSuccess('Member dan avatar berhasil dihapus.');
    }
}
