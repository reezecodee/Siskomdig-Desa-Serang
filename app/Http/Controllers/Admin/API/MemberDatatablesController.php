<?php

namespace App\Http\Controllers\Admin\API;

use App\Http\Controllers\Controller;
use App\Models\Member;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class MemberDatatablesController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $members = Member::with('businessFields')->latest();

            return DataTables::of($members)
                ->addIndexColumn()
                ->addColumn('bidang_usaha', function ($member) {
                    return $member->businessFields ? $member->businessFields->nama_bidang_usaha : '-';
                })
                ->addColumn('action', function ($member) {
                    $updateStatusRoute = route('update.memberStatus', $member->id);

                    return '
                    <div class="d-flex gap-2">
                        <a href="' . route('show.editMemberUMKM', $member->id) . '">
                            <button class="btn btn-primary show" data-id="' . $member->id . '">Edit</button>
                        </a>
                        <div class="dropdown">
                            <button class="btn btn-' . ($member->status == 'Aktif' ? 'success' : 'danger') . ' dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                ' . $member->status . '
                            </button>
                            <ul class="dropdown-menu">
                                <li>
                                    <form action="' . $updateStatusRoute . '" method="POST" style="display:inline;" id="' . $member->id . '-active">
                                        ' . csrf_field() . '
                                        ' . method_field('PUT') . '
                                        <input type="hidden" name="status" value="Aktif">
                                        <button type="button" class="dropdown-item" onclick="changeStatus(\'' . $member->id . '\', \'active\')">Aktif</button>
                                    </form>
                                </li>
                                <li>
                                    <form action="' . $updateStatusRoute . '" method="POST" style="display:inline;" id="' . $member->id . '-not-active">
                                        ' . csrf_field() . '
                                        ' . method_field('PUT') . '
                                        <input type="hidden" name="status" value="Tidak aktif">
                                        <button type="button" class="dropdown-item" onclick="changeStatus(\'' . $member->id . '\', \'not-active\')">Tidak aktif</button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                        <a href="' . route('show.detailMemberUMKM', $member->id) . '">
                            <button class="btn btn-secondary show" data-id="' . $member->id . '">Detail</button>
                        </a>
                    </div>
                ';
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return back();
    }
}
