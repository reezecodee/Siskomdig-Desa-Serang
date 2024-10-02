<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Information;
use Illuminate\Http\Request;

class InformationController extends Controller
{
    public function informationPage()
    {
        $title = 'Semua Informasi Komunitas Digital Desa Serang';

        return view('admin.information.index', compact('title'));
    }

    public function myInformationPage()
    {
        $title = 'Semua Informasi Yang Saya Buat';

        return view('admin.information.my-self-information', compact('title'));
    }

    public function editMyInformationPage($id)
    {
        $title = 'Edit Informasi Saya';
        $data = Information::findOrFail($id);

        return view('admin.information.edit-information', compact('title', 'data'));
    }
}
