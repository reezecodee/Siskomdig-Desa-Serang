<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Member;

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
        $data = Member::findOrFail($id);

        return view('admin.member.detail-member', compact('title', 'data'));
    }

    public function editMemberPage($id)
    {
        $title = 'Edit Anggota UMKM';
        $data = Member::findOrFail($id);

        return view('admin.member.edit-member', compact('title', 'data'));
    }
}
