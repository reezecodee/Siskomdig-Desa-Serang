<?php

namespace App\Http\Controllers\Admin\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Feedback\UserFeedbackRequest;
use App\Models\UserFeedback;
use Illuminate\Http\Request;

class ManageUserFeedbackController extends Controller
{
    public function addUserFeedback(UserFeedbackRequest $request)
    {
        $validatedData = $request->validated();
        UserFeedback::create($validatedData);
        return back()->withSuccess('Berhasil mengirimkan saran');
    }

    public function deleteUserFeedback($id)
    {
        $feedback = UserFeedback::findOrFail($id);
        $feedback->delete();

        return back()->withSuccess("Berhasil menghapus data masukan dari \"{$feedback->nama_pengguna}\".");
    }
}
