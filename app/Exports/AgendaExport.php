<?php

namespace App\Exports;

use App\Models\Agenda;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class AgendaExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    private $year;
    private $month;

    public function __construct($year, $month)
    {
        $this->year = $year;
        $this->month = $month;
    }

    public function collection()
    {
        return Agenda::where('bulan', $this->month)
            ->where('tahun', $this->year)
            ->orderBy('tgl_pelaksanaan', 'asc')
            ->get()
            ->map(function ($agenda, $index) {
                return [
                    'no' => $index + 1, // Menambahkan nomor urut
                    'tgl_pelaksanaan' => formattedDate($agenda->tgl_pelaksanaan),
                    'judul_agenda' => $agenda->judul_agenda,
                    'keterangan' => $agenda->keterangan,
                ];
            });
    }

    public function headings(): array
    {
        return [
            'No',
            'Tanggal pelaksanaan',
            'Judul agenda',
            'Keterangan agenda',
        ];
    }
}
