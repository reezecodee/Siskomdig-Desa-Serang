<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StorageController extends Controller
{
    public function storagePage()
    {
        $title = 'Penyimpanan Data Aplikasi';

        return view('admin.storage.index', compact('title'));
    }

    public function storageImagesPage($fileType)
    {
        $title = 'Semua Gambar Yang di Upload';

        return view('admin.storage.images', compact('title'));
    }

    public function storageArchivesPage()
    {
        $title = 'Semua Arsip Yang di Simpan';

        return view('admin.storage.archives', compact('title'));
    }
}
