<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\UmkmMember;
use App\Models\UmkmProduct;

class MemberController extends Controller
{
    public function memberPage()
    {
        $title = 'Anggota UMKM Terdaftar';

        return view('admin.member.index', compact('title'));
    }

    public function detailMemberPage($id)
    {
        $title = 'Detail Anggota UMKM';
        $data = UmkmMember::findOrFail($id);
        $products = UmkmProduct::where('anggota_id', $id)->paginate(8);

        return view('admin.member.detail-member', compact('title', 'data', 'products'));
    }

    public function editMemberPage($id)
    {
        $title = 'Edit Anggota UMKM';
        $data = UmkmMember::findOrFail($id);

        return view('admin.member.edit-member', compact('title', 'data'));
    }
}
