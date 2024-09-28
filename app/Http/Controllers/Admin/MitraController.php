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

    public function detailMemberPage($id)
    {
        $title = 'Detail Anggota UMKM';

        return view('admin.mitra.detail-member', compact('title'));
    }

    public function editMemberPage($id)
    {
        $title = 'Edit Anggota UMKM';

        return view('admin.mitra.edit-member', compact('title'));
    }

    public function productPage()
    {
        $title = 'Produk Milik Anggota UMKM';

        return view('admin.mitra.product', compact('title'));
    }

    public function editProductPage()
    {
        $title = 'Edit Produk Milik Anggota UMKM';

        return view('admin.mitra.edit-product', compact('title'));
    }

    public function detailProductPage()
    {
        $title = 'Detail Produk Milik Anggota UMKM';

        return view('admin.mitra.detail-product', compact('title'));
    }
}
