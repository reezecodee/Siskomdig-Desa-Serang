<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Agenda;
use App\Models\Archive;
use App\Models\OrganizationStructure;
use App\Models\VisiMision;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function berandaPage()
    {
        $title = 'Selamat Datang di Komunitas Digital Desa Serang, Kabupaten Tasikmalaya';

        return view('site.beranda', compact('title'));
    }

    public function visiMisiPage()
    {
        $title = 'Visi & Misi Komunitas Digital Desa Serang';

        $visiMision = VisiMision::latest()->first();
        $visi = $visiMision['visi'] ?? '';
        $mision = $visiMision['misi'] ?? '';

        return view('site.visi-misi', compact('title', 'visi', 'mision'));
    }

    // Profile Komunitas

    public function organizationStructurePage()
    {
        $title = 'Struktur Organisasi Komunitas Digital Desa Serang';

        $organizationStructure = OrganizationStructure::latest()->first();
        $image = $organizationStructure['gambar'] ?? false;

        return view('site.struktur-organisasi', compact('title', 'image'));
    }

    public function activityAgendaPage(Request $request)
    {
        $title = 'Agenda Kegiatan Komunitas Digital Desa Serang';

        $search = $request->query('s'); // Format pencarian seperti '2024-06'

        Carbon::setLocale('id');
        $date = Carbon::now();

        $month = $date->translatedFormat('F'); // Nama bulan dalam bahasa Indonesia
        $year = $date->year;

        // Jika ada input pencarian, pecah menjadi tahun dan bulan
        if ($search) {
            $searchParts = explode('-', $search); // Pisahkan '2024' dan '06'
            if (count($searchParts) === 2) {
                $year = $searchParts[0]; // Tahun diambil dari bagian pertama
                $monthNumber = (int) $searchParts[1]; // Bulan (dalam format numerik)

                $month = Carbon::create()->month($monthNumber)->translatedFormat('F');
            }
        }

        $agendas = Agenda::where('bulan', $month)
            ->where('tahun', $year)
            ->orderBy('tgl_pelaksanaan', 'asc')
            ->get();

        return view('site.agenda-kegiatan', compact('title', 'month', 'year', 'agendas', 'search'));
    }


    public function activityArchivePage()
    {
        $title = 'Arsip Kegiatan Komunitas Digital Desa Serang';

        $archives = Archive::latest()->paginate(10);

        return view('site.arsip-kegiatan', compact('title', 'archives'));
    }

    public function informationPage()
    {
        $title = 'Informasi Terbaru Komunitas Digital Desa Serang';

        return view('site.informasi', compact('title'));
    }

    // Mitra Komunitas

    public function memberUMKM()
    {
        $title = 'Anggota UMKM Komunitas Digital Desa Serang';

        return view('site.anggota-umkm', compact('title'));
    }

    public function productUMKM()
    {
        $title = 'Produk Pelaku UMKM Komunitas Digital Desa Serang';

        return view('site.produk-umkm', compact('title'));
    }
}
