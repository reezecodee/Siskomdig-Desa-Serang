<?php

namespace App\Http\Controllers\Admin\API;

use App\Http\Controllers\Controller;
use App\Models\UmkmMember;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class MemberDatatablesController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $archives = UmkmMember::query()->latest();

            // Menggunakan DataTables untuk memproses data server-side
            return DataTables::of($archives)
                ->addIndexColumn()
                ->addColumn('action', function ($archive) {
                    return '
                    <div class="d-flex gap-2">
                        <a href="' . route('show.editMemberUMKM', $archive->id) . '">
                        <button class="btn btn-primary show" data-id="' . $archive->id . '">Edit</button>
                        </a>
                        <form method="POST" action="" id="delete-form-' . $archive->id . '">
                            ' . csrf_field() . '
                            ' . method_field("DELETE") . '
                            <button type="button" class="btn btn-danger" onclick="deleteAlert(\'' . $archive->id . '\')">Hapus</button>
                        </form>
                        <a href="' . route('show.detailMemberUMKM', $archive->id) . '">
                        <button class="btn btn-success show" data-id="' . $archive->id . '">Detail</button>
                        </a>
                    </div>
                    ';
                })
                ->editColumn('pendapatan', function($archive){
                    return idr($archive->pendapatan);
                })
                ->editColumn('pendapatan_tertinggi', function($archive){
                    return idr($archive->pendapatan_tertinggi);
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return back();
    }
}
