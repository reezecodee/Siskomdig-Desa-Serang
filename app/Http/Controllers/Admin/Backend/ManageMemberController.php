<?php

namespace App\Http\Controllers\Admin\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Member\MemberRequest;
use App\Models\Member;
use Illuminate\Support\Facades\Storage;

class ManageMemberController extends Controller
{
    public function addMember(MemberRequest $request)
    {
        $this->checkDiskSpace();

        $validatedData = $request->validated();

        if ($request->hasFile('avatar')) {
            $avatarFile = $request->file('avatar');
            $avatarFileName = uniqid() . '.' . $avatarFile->getClientOriginalExtension();
            $avatarFile->storeAs('profiles', $avatarFileName, 'public');
            $validatedData['avatar'] = $avatarFileName;
        }

        $member = Member::create($validatedData);
        return back()->withSuccess("Berhasil menambahkan anggota UMKM baru \"{$member->nama}\".");
    }

    public function editMember(MemberRequest $request, $id)
    {
        $this->checkDiskSpace();

        $validatedData = $request->validated();
        $member = Member::findOrFail($id);

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
        return back()->withSuccess('Berhasil memperbarui data anggota UMKM.');
    }
}
