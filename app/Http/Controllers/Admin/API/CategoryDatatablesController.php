<?php

namespace App\Http\Controllers\Admin\API;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\UmkmProduct;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class CategoryDatatablesController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $categories = Category::query()->latest();

            return DataTables::eloquent($categories)
                ->addIndexColumn()
                ->addColumn('action', function ($category) {
                    $deleteButton = '';

                    // Cek apakah kategori memiliki data berelasi
                    if ($category->umkmProducts()->exists()) {
                        $deleteButton = '<button type="button" class="btn btn-danger" onclick="alertInfoDeleteCategory()">Hapus</button>';
                    } else {
                        $deleteButton = '
                    <form method="POST" action="' . route('destroy.category', $category->id) . '" id="delete-form-' . $category->id . '">
                        ' . csrf_field() . '
                        ' . method_field("DELETE") . '
                        <button type="button" class="btn btn-danger" onclick="deleteAlert(\'' . $category->id . '\')">Hapus</button>
                    </form>';
                    }

                    return '
                <div class="d-flex gap-2">
                    <form id="edit-form-' . $category->id . '" method="POST" action="' . route('update.category', $category->id) . '" style="display: none;">
                        ' . method_field("PUT") . '
                        ' . csrf_field() . '
                        <input type="hidden" name="nama_kategori" value="' . $category->nama_kategori . '" id="name-input-' . $category->id . '">
                    </form>
                    <button type="button" class="btn btn-primary" onclick="editAlert(\'' . $category->id . '\')">Edit</button>
                    ' . $deleteButton . '
                    <a href="' . route('show.detailCategory', $category->id) . '">
                        <button class="btn btn-success show" data-id="' . $category->id . '">Detail</button>
                    </a>
                </div>
                ';
                })
                ->editColumn('created_at', function ($category) {
                    return $category->created_at->format('d M Y - H:i');
                })
                ->editColumn('updated_at', function ($category) {
                    return $category->updated_at->format('d M Y - H:i');
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return back();
    }


    public function products(Request $request, $id)
    {
        if ($request->ajax()) {
            // Mengambil data menggunakan pagination untuk server-side processing
            $product = UmkmProduct::where('kategori_id', $id)->with('umkmMembers')->latest();

            // Menggunakan DataTables untuk memproses data server-side
            return DataTables::eloquent($product)
                ->addIndexColumn()
                ->addColumn('member_name', function ($product) {
                    // Mengakses data dari relasi 'umkmMembers'
                    return $product->umkmMembers ? $product->umkmMembers->nama : '-';
                })
                ->addColumn('action', function ($product) {
                    return '
                    <a href="' . route('show.detailProductUMKM', $product->id) . '">
                    <button class="btn btn-success show" data-id="' . $product->id . '">Lihat produk</button>
                    </a>
                    ';
                })
                ->editColumn('harga', function($product){
                    return idr($product->harga);
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return back();
    }
}
