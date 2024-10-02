<?php

namespace App\Http\Controllers\Admin\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class AdminDatatablesController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $admins = User::query()->latest();

            // Menggunakan DataTables untuk memproses data server-side
            return DataTables::of($admins)
                ->addIndexColumn()
                ->addColumn('action', function ($admin) {
                    // Memeriksa apakah email belum diverifikasi
                    if ($admin->email_verified_at) {
                        // Jika belum diverifikasi, tampilkan tombol hapus
                        return '
                        <div class="d-flex gap-2">
                        <form method="POST" action="" id="delete-form-' . $admin->id . '">
                            ' . csrf_field() . '
                            ' . method_field("DELETE") . '
                            <button type="button" class="btn btn-danger" onclick="deleteAlert(\'' . $admin->id . '\')">Hapus</button>
                        </form>
                        </div>
                        ';
                    }else{
                        return '<span>Terverifikasi</span>';
                    }
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return back();
    }
}
