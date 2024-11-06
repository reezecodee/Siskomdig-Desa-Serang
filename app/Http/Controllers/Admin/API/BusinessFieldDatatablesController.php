<?php

namespace App\Http\Controllers\Admin\API;

use App\Http\Controllers\Controller;
use App\Models\BusinessField;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class BusinessFieldDatatablesController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $businessFields = BusinessField::query()->withCount('members')->latest();

            // Menggunakan DataTables untuk memproses data server-side
            return DataTables::of($businessFields)
                ->addIndexColumn()
                ->addColumn('action', function ($business) {
                    if ($business->members()->exists()) {
                        $buttonDelete = '<button type="button" onclick="alertDontDelete()" class="btn btn-secondary">Sudah terkait</button>';
                    } else {
                        $buttonDelete = '<form method="POST" action="' . route('destroy.businessField', $business->id) . '" id="delete-form-' . $business->id . '">
                                            ' . csrf_field() . '
                                            ' . method_field("DELETE") . '
                                            <button type="button" class="btn btn-danger" onclick="deleteAlert(\'' . $business->id . '\')">Hapus</button>
                                        </form>';
                    }
                    return '
                    <div class="d-flex gap-2">
                        <form action="' . route('update.businessField', $business->id) . '" method="post" id="edit-form-' . $business->id . '">
                            ' . csrf_field() . '
                            ' . method_field("PUT") . '
                            <input type="hidden" name="nama_bidang_usaha" id="name-input-' . $business->id . '" value="'.$business->nama_bidang_usaha.'">
                            <button type="button" class="btn btn-primary" onclick="editAlert(\''. $business->id .'\')">Edit</button>
                        </form>
                        ' . $buttonDelete . '
                        <a href="' . route('show.detailBusinessField', $business->id) . '">
                        <button class="btn btn-success show" data-id="' . $business->id . '">Detail</button>
                        </a>
                    </div>
                    ';
                })
                ->addColumn('anggota_terkait', function ($business) {
                    $count = $business->members_count ?? 0;
                    $condition = $count ? "$count anggota" : 'Belum terkait';
                    return $condition;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return back();
    }
}
