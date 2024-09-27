<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    public function activityAgendaPage()
    {
        $title = 'Agenda Kegiatan Komunitas';

        return view('admin.agenda.index', compact('title'));
    }

    public function activityArchivePage()
    {
        $title = 'Arsip Kegiatan Komunitas';

        return view('admin.archive.index', compact('title'));
    }
}
