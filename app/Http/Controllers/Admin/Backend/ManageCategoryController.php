<?php

namespace App\Http\Controllers\Admin\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Category\CategoryRequest;
use App\Models\Category;

class ManageCategoryController extends Controller
{
    public function addCategory(CategoryRequest $request)
    {
        $validatedData = $request->validated();

        $category = Category::create($validatedData);
        return back()->withSuccess("Berhasil menambahkan kategori produk UMKM baru \"{$category->nama_kategori}\"");
    }

    public function editCategory(CategoryRequest $request, $id)
    {
        $validatedData = $request->validated();
        $category = Category::findOrFail($id);
        $category->update($validatedData);

        return back()->withSuccess('Berhasil memperbarui kategori produk UMKM');
    }

    public function deleteCategory($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();

        return back()->withSuccess("Berhasil menghapus kategori produk UMKM \"{$category->nama_kategori}\"");
    }
}
