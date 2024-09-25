<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SearchResultController extends Controller
{
    public function searchResultPage()
    {
        $title = 'Hasil Pencatian';

        return view('admin.search-result.index', compact('title'));
    }
}
