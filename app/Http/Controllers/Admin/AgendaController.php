<?php

namespace App\Http\Controllers\Admin;

use App\Exports\AgendaExport;
use App\Http\Controllers\Controller;
use App\Models\Agenda;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Yajra\DataTables\Facades\DataTables;

class AgendaController extends Controller
{
    public function activityAgendaPage()
    {
        $title = 'Agenda Kegiatan Komunitas';

        return view('admin.agenda.index', compact('title'));
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
            ]);

            return DataTables::of($users)
                ->addIndexColumn()
                ->addColumn('action', function ($user) {
                    return '
            <button class="btn btn-primary edit" data-id="' . $user['id'] . '">Edit</button>
            <button class="btn btn-danger delete" data-id="' . $user['id'] . '">Hapus</button>
            <button class="btn btn-success show" data-id="' . $user['id'] . '">Detail</button>
        ';
                })
                ->editColumn('created_at', function ($user) {
                    return $user['created_at']; // Pastikan ini dalam format yang benar
                })
                ->rawColumns(['action']) // Pastikan kolom action dapat di-render sebagai HTML
                ->make(true);
        }
    }

    public function addActivityAgendaPage()
    {
        $title = 'Buat Agenda Baru';

        return view('admin.agenda.create', compact('title'));
    }

    public function editActivityAgendaPage($id)
    {
        $title = 'Edit Agenda';
        $data = Agenda::findOrFail($id);

        return view('admin.agenda.edit', compact('title', 'data'));
    }

    public function detailActivityAgendaPage($year, $month)
    {
        $title = "Detail Agenda: Bulan $month $year";

        return view('admin.agenda.detail', compact('title', 'year', 'month'));
    }

    public function exportAgenda($year, $month)
    {
        return Excel::download(new AgendaExport($year, $month), "Agenda-$month-$year.xlsx");
    }
}
