<?php

namespace App\Http\Controllers\Admin\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Member\MemberRequest;
use App\Models\UmkmMember;
use App\Models\UmkmProduct;
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

        $member = UmkmMember::create($validatedData);
        return back()->withSuccess("Berhasil menambahkan anggota UMKM baru \"{$member->nama}\".");
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
        return back()->withSuccess('Berhasil memperbarui data anggota UMKM.');
    }

    public function deleteMember($id)
    {
        $member = UmkmMember::findOrFail($id);

        if ($member->avatar && Storage::disk('public')->exists('profiles/' . $member->avatar)) {
            Storage::disk('public')->delete('profiles/' . $member->avatar);
        }

        $products = UmkmProduct::where('anggota_id', $member->id)->get();
        foreach($products as $item){
            if ($item->foto_produk && Storage::disk('public')->exists('images/' . $item->foto_produk)) {
                Storage::disk('public')->delete('images/' . $item->foto_produk);
            }

            $item->delete();
        }

        $member->delete();

        return back()->withSuccess("Berhasil menghapus anggota UMKM \"{$member->nama}\" beserta produknya.");
    }
}
