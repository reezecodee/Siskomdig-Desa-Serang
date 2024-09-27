<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function berandaPage(){
        $title = 'Selamat Datang di Komunitas Digital Desa Serang, Kabupaten Tasikmalaya';

        return view('site.beranda', compact('title'));
    }

    public function visiMisiPage(){
        $title = 'Visi & Misi Komunitas Digital Desa Serang';

        return view('site.visi-misi', compact('title'));
    }

    // Profile Komunitas

    public function organizationStructurePage(){
        $title = 'Struktur Organisasi Komunitas Digital Desa Serang';

        return view('site.struktur-organisasi', compact('title'));
    }

    public function activityAgendaPage(){
        $title = 'Agenda Kegiatan Komunitas Digital Desa Serang';

        return view('site.agenda-kegiatan', compact('title'));
    }

    public function activityArchivePage(){
        $title = 'Arsip Kegiatan Komunitas Digital Desa Serang';

        return view('site.arsip-kegiatan', compact('title'));
    }

    public function informationPage(){
        $title = 'Informasi Terbaru Komunitas Digital Desa Serang';

        return view('site.informasi', compact('title'));
    }

    // Mitra Komunitas

    public function memberUMKM(){
        $title = 'Anggota UMKM Komunitas Digital Desa Serang';

        return view('site.anggota-umkm', compact('title'));
    }

    public function productUMKM(){
        $title = 'Produk Pelaku UMKM Komunitas Digital Desa Serang';

        return view('site.produk-umkm', compact('title'));
    }
}
