<?php

namespace App\Http\Controllers\Admin\API;

use App\Http\Controllers\Controller;
use App\Models\Information;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class InformationDatatablesController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $informations = Information::with('users')->where('visibilitas', 'Publik')->latest();

            // Menggunakan DataTables untuk memproses data server-side
            return DataTables::of($informations)
                ->addIndexColumn()
                ->addColumn('action', function ($information) {
                    return '
                    <div class="d-flex gap-2">
                        <a href="">
                        <button class="btn btn-success show" data-id="' . $information->id . '">Lihat informasi</button>
                        </a>
                    </div>
                    ';
                })
                ->addColumn('author_name', function ($information) {
                    return $information->users->nama;
                })
                ->editColumn('created_at', function ($information) {
                    return $information->created_at->format('d M Y');
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return back();
    }

    public function myInformations(Request $request)
    {
        if ($request->ajax()) {
            $informations = Information::with('users')->latest();

            // Menggunakan DataTables untuk memproses data server-side
            return DataTables::of($informations)
                ->addIndexColumn()
                ->addColumn('action', function ($information) {
                    return '
                    <div class="d-flex gap-2">
                        <a href="' . route('show.editMyInformation', $information->id) . '">
                        <button class="btn btn-primary show" data-id="' . $information->id . '">Edit</button>
                        </a>
                        <form method="POST" action="'. route('destroy.information', $information->id) .'" id="delete-form-' . $information->id . '">
                        ' . csrf_field() . '
                        ' . method_field("DELETE") . '
                        <button type="button" class="btn btn-danger" onclick="deleteAlert(\'' . $information->id . '\')">Hapus</button>
                        </form>
                        <a href="">
                        <button class="btn btn-success show" data-id="' . $information->id . '">Lihat informasi</button>
                        </a>
                    </div>
                    ';
                })
                ->addColumn('author_name', function ($information) {
                    return $information->users->nama;
                })
                ->editColumn('created_at', function ($information) {
                    return $information->created_at->format('d M Y');
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return back();
    }
}
