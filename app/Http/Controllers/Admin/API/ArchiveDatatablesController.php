<?php

namespace App\Http\Controllers\Admin\API;

use App\Http\Controllers\Controller;
use App\Models\Agenda;
use App\Models\Archive;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class ArchiveDatatablesController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $archives = Archive::query()->latest();

            // Menggunakan DataTables untuk memproses data server-side
            return DataTables::of($archives)
                ->addIndexColumn()
                ->addColumn('action', function ($archive) {
                    return '
                    <div class="d-flex gap-2">
                        <a href="">
                        <button class="btn btn-warning show" data-id="' . $archive->id . '">Download</button>
                        </a>
                        <form method="POST" action="" id="delete-form-' . $archive->id . '">
                            ' . csrf_field() . '
                            ' . method_field("DELETE") . '
                            <button type="button" class="btn btn-danger" onclick="deleteAlert(\'' . $archive->id . '\')">Hapus</button>
                        </form>
                        <a href="" download>
                        <button class="btn btn-success show" data-id="' . $archive->id . '">Detail</button>
                        </a>
                    </div>
                    ';
                })
                ->editColumn('created_at', function($archive){
                    return $archive->created_at->format('d M Y');
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return back();
    }
}
