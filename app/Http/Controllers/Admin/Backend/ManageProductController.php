<?php

namespace App\Http\Controllers\Admin\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product\EditProductRequest;
use App\Http\Requests\Product\ProductRequest;
use App\Models\UmkmProduct;
use Illuminate\Support\Facades\Storage;

class ManageProductController extends Controller
{
    public function addProduct(ProductRequest $request)
    {
        $this->checkDiskSpace();

        $validatedData = $request->validated();

        $productFile = $request->file('foto_produk');
        $productFileName = uniqid() . '.' . $productFile->getClientOriginalExtension();
        $productFile->storeAs('images', $productFileName, 'public');
        $validatedData['foto_produk'] = $productFileName;

        $product = UmkmProduct::create($validatedData);
        return back()->withSuccess("Berhasil menambahkan data produk \"{$product->nama_produk}\"");
    }

    public function editProduct(EditProductRequest $request, $id)
    {
        $this->checkDiskSpace();

        $validatedData = $request->validated();
        $product = UmkmProduct::findOrFail($id);

        if ($request->hasFile('foto_produk')) {
            if ($product->foto_produk && Storage::disk('public')->exists('images/' . $product->foto_produk)) {
                Storage::disk('public')->delete('images/' . $product->foto_produk);
            }

            $productFile = $request->file('foto_produk');
            $productFileName = uniqid() . '.' . $productFile->getClientOriginalExtension();
            $productFile->storeAs('images', $productFileName, 'public');
            $validatedData['foto_produk'] = $productFileName;
        }

        $product->update($validatedData);
        return back()->withSuccess('Berhasil memperbarui data produk');
    }

    public function deleteProduct($id)
    {
        $product = UmkmProduct::findOrFail($id);

        if ($product->foto_produk && Storage::disk('public')->exists('images/' . $product->foto_produk)) {
            Storage::disk('public')->delete('images/' . $product->foto_produk);
        }

        $product->delete();
        return back()->withSuccess("Berhasil menghapus data produk \"{$product->nama_produk}\"");
    }
}
