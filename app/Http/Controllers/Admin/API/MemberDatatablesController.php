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
            $members = UmkmMember::query()->latest();

            // Menggunakan DataTables untuk memproses data server-side
            return DataTables::of($members)
                ->addIndexColumn()
                ->addColumn('action', function ($member) {
                    return '
                    <div class="d-flex gap-2">
                        <a href="' . route('show.editMemberUMKM', $member->id) . '">
                        <button class="btn btn-primary show" data-id="' . $member->id . '">Edit</button>
                        </a>
                        <form method="POST" action="' . route('destroy.member', $member->id) . '" id="delete-form-' . $member->id . '">
                            ' . csrf_field() . '
                            ' . method_field("DELETE") . '
                            <button type="button" class="btn btn-danger" onclick="deleteAlert(\'' . $member->id . '\')">Hapus</button>
                        </form>
                        <a href="' . route('show.detailMemberUMKM', $member->id) . '">
                        <button class="btn btn-success show" data-id="' . $member->id . '">Detail</button>
                        </a>
                    </div>
                    ';
                })
                ->editColumn('pendapatan', function($member){
                    return idr($member->pendapatan);
                })
                ->editColumn('pendapatan_tertinggi', function($member){
                    return idr($member->pendapatan_tertinggi);
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return back();
    }
}
