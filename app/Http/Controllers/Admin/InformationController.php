<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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

        return view('admin.information.my-shelf-information', compact('title'));
    }

    public function editMyInformationPage()
    {
        $title = 'Edit Informasi Saya';

        return view('admin.information.edit-information', compact('title'));
    }
}
