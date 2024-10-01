<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\UmkmMember;
use App\Models\UmkmProduct;
use Illuminate\Http\Request;

class MitraController extends Controller
{
    public function memberPage()
    {
        $title = 'Anggota UMKM Terdaftar';
        $members = UmkmMember::paginate(10);

        return view('admin.mitra.member', compact('title', 'members'));
    }

    public function detailMemberPage($id)
    {
        $title = 'Detail Anggota UMKM';
        $data = UmkmMember::findOrFail($id);
        $products = UmkmProduct::where('anggota_id', $id)->paginate(10);

        return view('admin.mitra.detail-member', compact('title', 'data', 'products'));
    }

    public function editMemberPage($id)
    {
        $title = 'Edit Anggota UMKM';
        $data = UmkmMember::findOrFail($id);

        return view('admin.mitra.edit-member', compact('title', 'data'));
    }

    public function productPage()
    {
        $title = 'Produk Milik Anggota UMKM';
        $categories = Category::all();
        $members = UmkmMember::all();

        return view('admin.mitra.product', compact('title', 'categories', 'members'));
    }

    public function editProductPage($id)
    {
        $title = 'Edit Produk Milik Anggota UMKM';
        $data = UmkmProduct::findOrFail($id);
        $categories = Category::all();
        $members = UmkmMember::all();

        return view('admin.mitra.edit-product', compact('title', 'data', 'categories', 'members'));
    }

    public function detailProductPage($id)
    {
        $title = 'Detail Produk Milik Anggota UMKM';
        $data = UmkmProduct::where('id', $id)->with(['categories', 'umkmMembers'])->first();

        return view('admin.mitra.detail-product', compact('title', 'data'));
    }
}
