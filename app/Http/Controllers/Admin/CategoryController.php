<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function categoryPage()
    {
        $title = 'Kategori Produk UMKM';

        return view('admin.category.index', compact('title'));
    }
}
