<?php

namespace App\Http\Controllers\Admin\Backend;

use App\Http\Controllers\Controller;
use App\Models\UserFeedback;
use Illuminate\Http\Request;

class ManageUserFeedbackController extends Controller
{
    // public function addUserFeedback(UserFee){

    // }

    public function deleteUserFeedback($id)
    {
        $feedback = UserFeedback::findOrFail($id);
        $feedback->delete();

        return back()->withSuccess("Berhasil menghapus data masukan dari \"{$feedback->nama_pengguna}\".");
    }
}
