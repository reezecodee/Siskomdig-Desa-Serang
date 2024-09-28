<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class ActivityController extends Controller
{
    public function activityAgendaPage()
    {
        $title = 'Agenda Kegiatan Komunitas';

        return view('admin.agenda.index', compact('title'));
    }

    public function activityArchivePage()
    {
        $title = 'Arsip Kegiatan Komunitas';

        return view('admin.archive.index', compact('title'));
    }

    public function activityAgendaAPI(Request $request)
    {
        if ($request->ajax()) {
            $users = collect([
                [
                    'id' => 1,
                    'name' => 'acumalaka',
                    'email' => 'wkwk@gmail.com',
                    'created_at' => '2024-05-05 07:00:00',
                    'updated_at' => '2024-05-05 07:00:00',
                ],
                // Data lainnya...
            ]);

            return DataTables::of($users)
                ->addIndexColumn()
                ->addColumn('action', function ($user) {
                    return '
            <button class="btn btn-primary btn-sm edit" data-id="' . $user['id'] . '">Edit</button>
            <button class="btn btn-danger btn-sm delete" data-id="' . $user['id'] . '">Hapus</button>
        ';
                })
                ->editColumn('created_at', function ($user) {
                    return $user['created_at']; // Pastikan ini dalam format yang benar
                })
                ->rawColumns(['action']) // Pastikan kolom action dapat di-render sebagai HTML
                ->make(true);
        }
    }
}
