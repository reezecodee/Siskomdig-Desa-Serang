<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\VisiMision;
use Illuminate\Http\Request;

class VisiMisionController extends Controller
{
    public function visiMisionPage(){
        $title = 'Visi dan Misi Komunitas Digital Desa Serang';
        $data = VisiMision::latest()->first();
        if (!$data) {
            $data = new VisiMision();
            $data->visi = null;
            $data->misi = null;
        }

        return view('admin.visi-misi.index', compact('title', 'data'));
    }
}
