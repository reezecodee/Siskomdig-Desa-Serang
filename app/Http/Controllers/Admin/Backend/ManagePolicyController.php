<?php

namespace App\Http\Controllers\Admin\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Policy\PolicyRequest;
use App\Models\Policy;
use Illuminate\Http\Request;

class ManagePolicyController extends Controller
{
    public function configPolicy(PolicyRequest $request)
    {
        $this->checkDiskSpace();

        $validatedData = $request->validated();

        Policy::updateOrCreate(
            ['id' => $validatedData['id']],
            $validatedData
        );

        return back()->with('success', 'Kebijakan berhasil di perbarui.');
    }
}
