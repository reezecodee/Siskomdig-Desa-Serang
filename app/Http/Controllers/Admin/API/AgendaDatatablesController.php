<?php

namespace App\Http\Controllers\Admin\API;

use App\Http\Controllers\Controller;
use App\Models\Agenda;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class AgendaDatatablesController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            // Menghindari duplikasi kolom 'bulan' dan 'tahun' di dalam SELECT
            $agendas = Agenda::groupBy('bulan', 'tahun')
                ->selectRaw('MIN(id) as id, bulan, tahun, COUNT(*) as total_agenda') // Mengambil ID dan jumlah agenda
                ->get();

            // Menggunakan DataTables untuk memproses data server-side
            return DataTables::of($agendas)
                ->addIndexColumn()
                ->addColumn('action', function ($agenda) {
                    return '
                    <div class="d-flex gap-2">
                        <form method="POST" action="'. route('destroy.groupAgenda', ['month' => $agenda->bulan, 'year' => $agenda->tahun]) .'" id="delete-form-' . $agenda->id . '">
                            ' . csrf_field() . '
                            ' . method_field("DELETE") . '
                            <button type="button" class="btn btn-danger" onclick="deleteAlert(\'' . $agenda->id . '\')">Hapus</button>
                        </form>
                        <a href="' . route('show.detailActivityAgenda', ['year' => $agenda->tahun, 'month' => $agenda->bulan]) . '">
                        <button class="btn btn-success show" data-id="' . $agenda->id . '">Detail</button>
                        </a>
                    </div>
                    ';
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return back();
    }

    public function schedules(Request $request, $year, $month)
    {
        if ($request->ajax()) {
            $agendas = Agenda::where('bulan', $month)
                ->where('tahun', $year)
                ->orderBy('tgl_pelaksanaan', 'asc');

            return DataTables::eloquent($agendas)
                ->addIndexColumn()
                ->addColumn('action', function ($agenda) {
                    return '
                <div class="d-flex gap-2">
                    <a href="' . route('show.editActivityAgenda', $agenda->id) . '">
                    <button class="btn btn-success show" data-id="' . $agenda->id . '">Edit</button>
                    </a>
                    <form method="POST" action="'. route('destroy.agenda', $agenda->id) .'" id="delete-form-' . $agenda->id . '">
                        ' . csrf_field() . '
                        ' . method_field("DELETE") . '
                        <button type="button" class="btn btn-danger" onclick="deleteAlert(\'' . $agenda->id . '\')">Hapus</button>
                    </form>
                </div>
                ';
                })
                ->editColumn('tgl_pelaksanaan', function ($agenda) {
                    return formattedDate($agenda->tgl_pelaksanaan);
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return back();
    }
}
