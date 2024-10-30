<?php

namespace App\Http\Controllers\Admin\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Agenda\AgendaRequest;
use App\Models\Agenda;

class ManageAgendaController extends Controller
{
    public function addAgenda(AgendaRequest $request)
    {
        $this->checkDiskSpace();

        $validatedData = $request->validated();
        $agenda = Agenda::create($validatedData);

        return redirect()->route('show.activityAgenda')->withSuccess("Berhasil menambahkan agenda baru di bulan {$agenda->bulan} {$agenda->tahun}");
    }

    public function editAgenda(AgendaRequest $request, $id)
    {
        $this->checkDiskSpace();

        $validatedData = $request->validated();
        $agenda = Agenda::findOrFail($id);
        $agenda->update($validatedData);

        return back()->withSuccess('Berhasil memperbarui data agenda');
    }

    public function deleteAgenda($id)
    {
        $agenda = Agenda::findOrFail($id);
        $agenda->delete();

        return back()->withSuccess('Berhasil menghapus data agenda');
    }

    public function deleteGroupAgenda($month, $year)
    {
        $agenda = Agenda::where('bulan', $month)->where('tahun', $year);

        if (!$agenda->exists()) {
            return back()->with('failed', 'Data kegiatan yang ingin dihapus tidak ditemukan');
        }

        $agenda->delete();

        return back()->withSuccess("Berhasil menghapus grup agenda bulan {$month} {$year}");
    }
}
