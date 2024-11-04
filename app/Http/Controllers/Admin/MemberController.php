<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BusinessField;
use App\Models\Member;

class MemberController extends Controller
{
    public function memberPage()
    {
        $title = 'Anggota Komunitas';
        $businessFields = BusinessField::all();

        return view('admin.member.index', compact('title', 'businessFields'));
    }

    public function detailMemberPage($id)
    {
        $title = 'Detail Anggota Komunitas';
        $data = Member::with('businessFields')->findOrFail($id);

        return view('admin.member.detail-member', compact('title', 'data'));
    }

    public function editMemberPage($id)
    {
        $title = 'Edit Anggota Komunitas';
        $data = Member::with('businessFields')->findOrFail($id);
        $businessFields = BusinessField::all();


        return view('admin.member.edit-member', compact('title', 'data', 'businessFields'));
    }
}
