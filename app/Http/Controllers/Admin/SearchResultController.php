<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\UmkmMember;
use Illuminate\Http\Request;

class SearchResultController extends Controller
{
    public function searchResultPage(Request $request)
    {
        $title = 'Hasil Pencarian';
        $search = $request->query('s');
        if (!empty($search)) {
            // Jika ada nilai search, lakukan query dengan pagination
            $members = UmkmMember::where('nama', 'like', "%{$search}%")
                ->paginate(9)
                ->appends(['s' => $search]);
        } else {
            $members = collect([]);
        }

        return view('admin.search-result.index', compact('title', 'search', 'members'));
    }
}
