<?php

namespace App\Http\Controllers\Admin\API;

use App\Http\Controllers\Controller;
use App\Models\UserFeedback;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class UserFeedbackDatatablesController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $usersFeedback = UserFeedback::query()->latest();

            // Menggunakan DataTables untuk memproses data server-side
            return DataTables::of($usersFeedback)
                ->addIndexColumn()
                ->addColumn('saran_masukan', function ($feedback) {
                    return truncateText($feedback->saran_masukan);
                })
                ->addColumn('action', function ($feedback) {
                    return '
                        <div class="d-flex gap-2">
                            <form method="POST" action="' . route('destroy.userFeedback', $feedback->id) . '" id="delete-form-' . $feedback->id . '">
                                ' . csrf_field() . '
                                ' . method_field("DELETE") . '
                                <button type="button" class="btn btn-danger" onclick="deleteAlert(\'' . $feedback->id . '\')">Hapus</button>
                            </form>
                            <a href="' . route('show.detailUserFeedback', $feedback->id) . '">
                                <button class="btn btn-success">Lihat selengkapnya</button>
                            </a>
                        </div>
                        ';
                })
                ->rawColumns(['action'])
                ->make(true);
        }
    }
}
