<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrganizationStructureController extends Controller
{
    public function organizationStructurePage()
    {
        $title = 'Sturktur Organisasi Komunitas';

        return view('admin.organization.index', compact('title'));
    }
}
