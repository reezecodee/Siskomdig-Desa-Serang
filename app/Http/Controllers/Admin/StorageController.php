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
}
