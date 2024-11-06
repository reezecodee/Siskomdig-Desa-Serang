<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BusinessField;
use App\Models\Member;
use Illuminate\Http\Request;

class BusinessFieldController extends Controller
{
    public function businessFieldPage()
    {
        $title = 'Bidang Usaha Komunitas';

        return view('admin.business.index', compact('title'));
    }

    public function detailBusinessFieldPage($id)
    {
        $business = BusinessField::findOrFail($id);
        $title = 'Detail Bidang Usaha';
        $members = Member::where('business_id', $id)->paginate(9);

        return view('admin.business.detail', compact('title', 'business', 'members'));
    }
}
