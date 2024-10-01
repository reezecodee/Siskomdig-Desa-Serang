<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function categoryPage()
    {
        $title = 'Kategori Produk UMKM';

        return view('admin.category.index', compact('title'));
    }

    public function detailCategoryPage($id)
    {
        $title = 'Detail Kategori';
        $category = Category::findOrFail($id);

        return view('admin.category.detail', compact('title', 'category'));
    }
}
