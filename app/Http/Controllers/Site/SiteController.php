<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Agenda;
use App\Models\Archive;
use App\Models\Information;
use App\Models\OrganizationStructure;
use App\Models\UmkmMember;
use App\Models\UmkmProduct;
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


        // uji coba
        $visi = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ';

        $mision = '
            <ol>
                <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit,</li>
                <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, consectetur adipiscing elit, consectetur adipiscing elit, consectetur adipiscing elit, consectetur adipiscing elit,</li>
                <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit,</li>
                <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit,</li>
            </ol>
        ';

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


        // uji coba
        $agendas = collect([
            [
                'judul_agenda' => 'Ini cuma test doang gak banyak-banyak paling cuma sedikit aja kok',
                'bulan' => 'Oktober',
                'tahun' => '2024',
                'tgl_pelaksanaan' => '2024-10-10',
                'keterangan' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit...'
            ],
            [
                'judul_agenda' => 'Ini cuma test lagi dengan judul yang berbeda',
                'bulan' => 'November',
                'tahun' => '2024',
                'tgl_pelaksanaan' => '2024-11-12',
                'keterangan' => 'Test keterangan kedua...'
            ]
        ])->map(function ($agenda) {
            return (object) $agenda; // Mengubah setiap item menjadi object
        });

        return view('site.agenda-kegiatan', compact('title', 'month', 'year', 'agendas', 'search'));
    }

    public function activityArchivePage()
    {
        $title = 'Arsip Kegiatan Komunitas Digital Desa Serang';

        $archives = Archive::latest()->paginate(10);

        // uji coba

        $archives = collect([
            [
                'id' => 'asijdhasd213',
                'judul_arsip' => 'Ini cuma test doang gak banyak-banyak paling cuma sedikit aja kok',
                'deskripsi' => 'Ini cuma test doang gak banyak-banyak paling cuma sedikit aja kok Ini cuma test doang gak banyak-banyak paling cuma sedikit aja kok Ini cuma test doang gak banyak-banyak paling cuma sedikit aja kok',
                'file_zip' => 'acumalaka.zip',
                'thumbnail_arsip' => null,
            ],
            [
                'id' => 'askdkas83221',
                'judul_arsip' => 'Ini cuma test lagi dengan judul yang berbeda Ini cuma test doang gak banyak-banyak paling cuma sedikit aja kok',
                'deskripsi' => 'Ini cuma test doang gak banyak-banyak paling cuma sedikit aja kokIni cuma test doang gak banyak-banyak paling cuma sedikit aja kokIni cuma test doang gak banyak-banyak paling cuma sedikit aja kok',
                'file_zip' => 'acumalaka.zip',
                'thumbnail_arsip' => null,
            ]
        ])->map(function ($archives) {
            return (object) $archives; // Mengubah setiap item menjadi object
        });

        return view('site.arsip-kegiatan', compact('title', 'archives'));
    }

    public function detailArchivePage($id)
    {
        $title = 'Detail Arsip Kegiatan';
        // $data = Archive::findOrFail($id);

        // uji coba
        $data = (object) collect([
            'judul_arsip' => 'Ini cuma test doang gak banyak-banyak paling cuma sedikit aja',
            'deskripsi' => 'Ini cuma test doang gak banyak-banyak paling cuma sedikit aja kokIni cuma test doang gak banyak-banyak paling cuma sedikit aja Ini cuma test doang gak banyak-banyak paling cuma sedikit aja kokIni cuma test doang gak banyak-banyak paling cuma sedikit aja',
            'file_zip' => 'acumalaka.zip',
            'thumbnail_arsip' => null
        ])->all();

        return view('site.detail-arsip', compact('title', 'data'));
    }

    public function informationPage()
    {
        $title = 'Informasi Terbaru Komunitas Digital Desa Serang';
        $informations = Information::with('users')->latest()->paginate(12);

        $informations = collect([
            [
                'id' => 'asijdhasd213',
                'judul' => 'Kelapa muda mas Amba asasd askda jasd asdbas jasd',
                'admin' => 'Rusdi',
                'tanggal' => '29 Nov 2023',
                'thumbnail' => null,
                'foto_admin' => null,
            ],
            [
                'id' => 'asijdhasd214',
                'judul' => 'Produk teh mas rusdi askdkas ashda uda asiad',
                'admin' => 'Rusdi',
                'tanggal' => '29 Nov 2023',
                'thumbnail' => null,
                'foto_admin' => null,
            ]
        ])->map(function ($informations) {
            return (object) $informations; // Mengubah setiap item menjadi object
        });

        return view('site.informasi', compact('title', 'informations'));
    }

    public function readInformationPage($id)
    {
        $title = 'Baca Informasi';
        // $data = Information::with('users')->findOrFail($id);

        // uji coba
        $data = (object) collect([
            'id' => 'asijdhasd213',
            'admin' => 'Mas Amba',
            'judul' => 'Viral Mas Ambatukam berhasil memcahkan rekor Muwani di Ngawi Selatan',
            'konten_informasi' => 'Ini cuma test doang gak banyak-banyak paling cuma sedikit aja kokIni cuma test doang gak banyak-banyak paling cuma sedikit aja kokIni cuma test doang gak banyak-banyak paling cuma sedikit aja kok',
            'thumbnail' => null,
            'created_at' => '2024-10-19 19:47:12'
        ])->all();

        return view('site.baca-informasi', compact('title', 'data'));
    }

    // Mitra Komunitas

    public function memberUMKM()
    {
        $title = 'Anggota UMKM Komunitas Digital Desa Serang';
        $members = UmkmMember::latest()->paginate(12);

        // uji coba
        $members = collect([
            [
                'id' => 'asijdhasd213',
                'nama' => 'Mas Ambatukam',
                'jenis_usaha' => 'Petani handal',
                'telepon' => '08129123112',
                'email' => 'ajsdka@gmail.com',
                'avatar' => null
            ],
            [
                'id' => 'askdkas83221',
                'nama' => 'Mas Rusdi',
                'jenis_usaha' => 'Petani handal',
                'telepon' => '08129123112',
                'email' => 'ajsdka@gmail.com',
                'avatar' => null
            ]
        ])->map(function ($members) {
            return (object) $members; // Mengubah setiap item menjadi object
        });

        return view('site.anggota-umkm', compact('title', 'members'));
    }

    public function detailMemberUMKM($id)
    {
        $title = 'Detail Anggota UMKM Komunitas Digital Desa Serang';
        // $data = UmkmMember::findOrFail($id);
        // $products = UmkmProduct::with('umkmMembers')->where('anggota_id', $id)->latest()->get();

        // uji coba
        $data = (object) collect([
            'nama' => 'Mas Ambasingh',
            'telepon' => '08129637232',
            'email' => 'acumalaka@gmail.com',
            'jenis_usaha' => 'Kuli bangunan',
            'pendapatan' => '200000',
            'pendapatan_tertinggi' => '200000',
            'deskripsi' => 'Ini cuma test doang gak banyak-banyak paling cuma sedikit aja kokIni cuma test doang gak banyak-banyak paling cuma sedikit aja Ini cuma test doang gak banyak-banyak paling cuma sedikit aja kokIni cuma test doang gak banyak-banyak paling cuma sedikit aja',
            'avatar' => null
        ])->all();
        $products = collect([
            [
                'id' => 'asijdhasd213',
                'nama_produk' => 'Kelapa muda mas Amba',
                'deskripsi' => 'Ini cuma test doang gak banyak-banyak paling cuma sedikit aja kokIni cuma test doang gak banyak-banyak paling cuma sedikit aja kokIni cuma test doang gak banyak-banyak paling cuma sedikit aja kok',
                'harga' => '200000',
                'foto_produk' => null,
                'kategori' => 'Minuman'
            ],
            [
                'id' => 'asijdhasd214',
                'nama_produk' => 'Produk teh mas rusdi',
                'deskripsi' => 'Ini cuma test doang gak banyak-banyak paling cuma sedikit aja kokIni cuma test doang gak banyak-banyak paling cuma sedikit aja kokIni cuma test doang gak banyak-banyak paling cuma sedikit aja kok',
                'harga' => '200000',
                'foto_produk' => null,
                'kategori' => 'Minuman'
            ]
        ])->map(function ($products) {
            return (object) $products; // Mengubah setiap item menjadi object
        });

        return view('site.detail-anggota', compact('title', 'data', 'products'));
    }

    public function productUMKM()
    {
        $title = 'Produk Pelaku UMKM Komunitas Digital Desa Serang';
        $products = UmkmProduct::with('umkmMembers')->latest()->get();

        // uji coba
        $products = collect([
            [
                'id' => 'asijdhasd213',
                'nama_produk' => 'Kelapa muda mas Amba',
                'deskripsi' => 'Ini cuma test doang gak banyak-banyak paling cuma sedikit aja kokIni cuma test doang gak banyak-banyak paling cuma sedikit aja kokIni cuma test doang gak banyak-banyak paling cuma sedikit aja kok',
                'harga' => '200000',
                'foto_produk' => null,
                'kategori' => 'Minuman'
            ],
            [
                'id' => 'asijdhasd214',
                'nama_produk' => 'Produk teh mas rusdi',
                'deskripsi' => 'Ini cuma test doang gak banyak-banyak paling cuma sedikit aja kokIni cuma test doang gak banyak-banyak paling cuma sedikit aja kokIni cuma test doang gak banyak-banyak paling cuma sedikit aja kok',
                'harga' => '200000',
                'foto_produk' => null,
                'kategori' => 'Minuman'
            ]
        ])->map(function ($products) {
            return (object) $products; // Mengubah setiap item menjadi object
        });

        return view('site.produk-umkm', compact('title', 'products'));
    }

    public function detailProductUMKM($id)
    {
        $title = 'Detail Produk Pelaku UMKM Komunitas Digital Desa Serang';
        // $data = UmkmProduct::with(['umkmMembers', 'categories'])->findOrFail($id);

        // uji coba
        $data = (object) collect([
            'id' => 'asijdhasd213',
            'nama_produk' => 'Kelapa muda mas Amba',
            'deskripsi' => 'Ini cuma test doang gak banyak-banyak paling cuma sedikit aja kokIni cuma test doang gak banyak-banyak paling cuma sedikit aja kokIni cuma test doang gak banyak-banyak paling cuma sedikit aja kok',
            'harga' => '200000',
            'foto_produk' => null,
            'kategori' => 'Minuman',

            'avatar' => null,
            'nama' => 'Mas Ambatukam',
            'telepon' => '0812982342341',
            'email' => 'acumalaka@gmail.com'
        ])->all();

        return view('site.detail-produk', compact('title', 'data'));
    }
}
