<?php

namespace App\Http\Controllers\Admin\API;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class CategoryDatatablesController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            // Mengambil data menggunakan pagination untuk server-side processing
            $categories = Category::query();

            // Menggunakan DataTables untuk memproses data server-side
            return DataTables::eloquent($categories)
                ->addIndexColumn()
                ->addColumn('action', function ($category) {
                    return '
                    <div class="d-flex gap-2">
                    <button class="btn btn-primary edit" data-id="' . $category->id . '">Edit</button>
                    <form method="POST" action="" id="delete-form-' . $category->id . '">
                        ' . csrf_field() . '
                        ' . method_field("DELETE") . '
                        <button type="button" class="btn btn-danger" onclick="deleteAlert(\''. $category->id .'\')">Hapus</button>
                    </form>
                    <button class="btn btn-success show" data-id="' . $category->id . '">Detail</button>
                    </div>
                    ';
                })
                ->editColumn('created_at', function ($category) {
                    return $category->created_at->format('d M Y');
                })
                ->editColumn('updated_at', function ($category) {
                    return $category->updated_at->format('d M Y');
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return back();
    }
}
