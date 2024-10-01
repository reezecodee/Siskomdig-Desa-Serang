<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArchiveController extends Controller
{
    public function activityArchivePage()
    {
        $title = 'Arsip Kegiatan Komunitas';

        return view('admin.archive.index', compact('title'));
    }

    public function addActivityArchivePage()
    {
        $title = 'Buat Arsip Kegiatan Komunitas';

        return view('admin.archive.create', compact('title'));
    }
}
