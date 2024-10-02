<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\OrganizationStructure;

class OrganizationStructureController extends Controller
{
    public function organizationStructurePage()
    {
        $title = 'Sturktur Organisasi Komunitas';
        $data = OrganizationStructure::latest()->first();
        if(!$data){
            $data = new OrganizationStructure();
            $data->gambar = null;
        }

        return view('admin.organization.index', compact('title', 'data'));
    }
}
