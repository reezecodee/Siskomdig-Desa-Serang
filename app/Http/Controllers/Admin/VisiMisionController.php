<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VisiMisionController extends Controller
{
    public function visiMisionPage(){
        $title = 'Visi dan Misi Komunitas Digital Desa Serang';
        
        return view('admin.visi-misi.index', compact('title'));
    }
}
