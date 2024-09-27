<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MitraController extends Controller
{
    public function memberPage()
    {
        $title = 'Anggota UMKM Terdaftar';

        return view('admin.mitra.member', compact('title'));
    }

    public function productPage()
    {
        $title = 'Produk Milik Anggota UMKM';

        return view('admin.mitra.product', compact('title'));
    }
}
