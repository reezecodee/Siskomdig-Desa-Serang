<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\UserFeedback;
use Illuminate\Http\Request;

class UserFeedbackController extends Controller
{
    public function userFeedbackPage()
    {
        $title = 'Masukan Dari Pengguna';

        return view('admin.user-feedback.index', compact('title'));
    }

    public function detailUserFeedbackPage($id)
    {
        $title = 'Detail Masukan Dari Pengguna';
        $data = UserFeedback::findOrFail($id);

        return view('admin.user-feedback.detail', compact('title', 'data'));
    }
}
