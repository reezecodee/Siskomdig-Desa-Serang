<?php

namespace App\Http\Controllers\Admin\API;

use App\Http\Controllers\Controller;
use App\Models\UmkmProduct;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class ProductDatatablesController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $products = UmkmProduct::with(['umkmMembers', 'categories'])->latest();

            // Menggunakan DataTables untuk memproses data server-side
            return DataTables::of($products)
                ->addIndexColumn()
                ->addColumn('action', function ($product) {
                    return '
                    <div class="d-flex gap-2">
                        <a href="' . route('show.editProductUMKM', $product->id) . '">
                        <button class="btn btn-primary show" data-id="' . $product->id . '">Edit</button>
                        </a>
                        <form method="POST" action="" id="delete-form-' . $product->id . '">
                            ' . csrf_field() . '
                            ' . method_field("DELETE") . '
                            <button type="button" class="btn btn-danger" onclick="deleteAlert(\'' . $product->id . '\')">Hapus</button>
                        </form>
                        <a href="' . route('show.detailProductUMKM', $product->id) . '">
                        <button class="btn btn-success show" data-id="' . $product->id . '">Detail</button>
                        </a>
                    </div>
                    ';
                })
                ->addColumn('category_name', function ($product) {
                    return $product->categories ? $product->categories->nama_kategori : '-';
                })
                ->addColumn('member_name', function ($product) {
                    return $product->umkmMembers ? $product->umkmMembers->nama : '-';
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
