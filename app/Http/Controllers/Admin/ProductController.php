<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\UmkmMember;
use App\Models\UmkmProduct;

class ProductController extends Controller
{
    public function productPage()
    {
        $title = 'Produk Milik Anggota UMKM';
        $categories = Category::all();
        $members = UmkmMember::all();

        $memberName = function ($id) {
            $member = UmkmMember::find($id);
            return $member->nama ?? '--Pilih anggota pemilik--';
        };
        $categoryName = function ($id) {
            $category = Category::find($id);
            return $category->nama_kategori ?? '--Pilih kategori--';
        };

        return view('admin.product.index', compact('title', 'categories', 'members', 'memberName', 'categoryName'));
    }

    public function editProductPage($id)
    {
        $title = 'Edit Produk Milik Anggota UMKM';
        $data = UmkmProduct::findOrFail($id);
        $categories = Category::all();
        $members = UmkmMember::all();

        $memberName = function ($id) {
            $member = UmkmMember::find($id);
            return $member->nama ?? '--Pilih anggota pemilik--';
        };
        $categoryName = function ($id) {
            $category = Category::find($id);
            return $category->nama_kategori ?? '--Pilih kategori--';
        };

        return view('admin.product.edit-product', compact('title', 'data', 'categories', 'members', 'memberName', 'categoryName'));
    }

    public function detailProductPage($id)
    {
        $title = 'Detail Produk Milik Anggota UMKM';
        $data = UmkmProduct::where('id', $id)->with(['categories', 'umkmMembers'])->first();

        return view('admin.product.detail-product', compact('title', 'data'));
    }
}
