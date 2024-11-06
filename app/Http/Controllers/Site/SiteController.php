<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Agenda;
use App\Models\Archive;
use App\Models\BusinessField;
use App\Models\Information;
use App\Models\Member;
use App\Models\OrganizationStructure;
use App\Models\Policy;
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
        $data = Archive::findOrFail($id);
        $title = $data->judul_arsip;

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
        $data = Information::with('users')->findOrFail($id);
        $title = $data->judul;

        return view('site.baca-informasi', compact('title', 'data'));
    }

    public function memberUMKMPage(Request $request)
    {
        $title = 'Anggota UMKM Komunitas Digital Desa Serang';
        $search = $request->query('s');

        $members = Member::with('businessFields')->latest()
            ->when($search, function ($query, $search) {
                return $query->where('nama', 'like', '%' . $search . '%');
            })
            ->paginate(8);

        return view('site.anggota-umkm', compact('title', 'members'));
    }

    public function businessFieldPage()
    {
        $title = 'Bidang Usaha Yang Ada Di Desa Serang';
        $businesses = BusinessField::withCount('members')->has('members')->latest()->paginate(9);

        return view('site.bidang-usaha', compact('title', 'businesses'));
    }

    public function detailBusinessFieldPage($id)
    {
        $data = BusinessField::findOrFail($id);
        $title = "Detail Bidang Usaha {$data->nama_bidang_usaha}";
        $members = Member::with('businessFields')->where('business_id', $id)->latest()->paginate(8);

        return view('site.detail-bidang-usaha', compact('title', 'data', 'members'));
    }

    public function termsAndConditions()
    {
        $title = 'Syarat dan Ketentuan';
        $termsAndConditions = Policy::latest()->first();
        $termsAndConditions = $termsAndConditions->syarat_ketentuan ?? '';


        return view('site.syarat-ketentuan', compact('title', 'termsAndConditions'));
    }

    public function privacyPolicy()
    {
        $title = 'Kebijakan Privasi';
        $privacyPolicy = Policy::latest()->first();
        $privacyPolicy = $privacyPolicy->kebijakan_privasi ?? '';

        return view('site.kebijakan-privasi', compact('title', 'privacyPolicy'));
    }
}
