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
        $agenda = Agenda::where('bulan', $month)->where('tahun', $year);

        if ($agenda->doesntExist()) {
            return redirect()->route('show.activityAgenda');
        }

        return view('admin.agenda.detail', compact('title', 'year', 'month'));
    }

    public function exportAgenda($year, $month)
    {
        return Excel::download(new AgendaExport($year, $month), "Agenda-$month-$year.xlsx");
    }
}
