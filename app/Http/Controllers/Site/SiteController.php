<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Agenda;
use App\Models\Archive;
use App\Models\Information;
use App\Models\Member;
use App\Models\OrganizationStructure;
use App\Models\UmkmMember;
use App\Models\VisiMision;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function berandaPage()
    {
        $title = 'Selamat Datang di Komunitas Digital Desa Serang, Kabupaten Tasikmalaya';
        $informations = Information::with('users')->latest()->limit(4)->get();

        return view('site.beranda', compact('title', 'informations'));
    }

    public function visiMisiPage()
    {
        $title = 'Visi & Misi Komunitas Digital Desa Serang';
        $visiMision = VisiMision::latest()->first();
        $visi = $visiMision['visi'] ?? '';
        $mision = $visiMision['misi'] ?? '';

        return view('site.visi-misi', compact('title', 'visi', 'mision'));
    }

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
        $archives = Archive::latest()->paginate(5);

        return view('site.arsip-kegiatan', compact('title', 'archives'));
    }

    public function detailArchivePage($id)
    {
        $title = 'Detail Arsip Kegiatan';
        $data = Archive::findOrFail($id);

        return view('site.detail-arsip', compact('title', 'data'));
    }

    public function informationPage()
    {
        $title = 'Informasi Terbaru Komunitas Digital Desa Serang';
        $informations = Information::with('users')->where('visibilitas', 'Publik')->latest()->paginate(8);

        return view('site.informasi', compact('title', 'informations'));
    }

    public function readInformationPage($id)
    {
        $title = 'Baca Informasi';
        $data = Information::with('users')->findOrFail($id);

        return view('site.baca-informasi', compact('title', 'data'));
    }

    public function memberUMKMPage(Request $request)
    {
        $title = 'Anggota UMKM Komunitas Digital Desa Serang';
        $search = $request->query('s');

        $members = Member::latest()
            ->when($search, function ($query, $search) {
                return $query->where('nama', 'like', '%' . $search . '%');
            })
            ->paginate(8);

        return view('site.anggota-umkm', compact('title', 'members'));
    }

    public function detailMemberUMKMPage($id)
    {
        $title = 'Detail Anggota UMKM Komunitas Digital Desa Serang';
        $data = Member::findOrFail($id);

        return view('site.detail-anggota', compact('title', 'data'));
    }

    public function businessFieldPage(){
        $title = 'Bidang Usaha Yang Ada Di Desa Serang';

        return view('site.bidang-usaha', compact('title'));
    }
}
