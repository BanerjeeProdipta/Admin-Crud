<?php

namespace App\Http\Controllers;

use App\Notice;
use Illuminate\Http\Request;

class NoticeController extends Controller
{
    public function store(Request $request, Notice $notice)
    {
        $notice->details = $request->details;
        $notice->posted_by = "Admin";
        $notice->save();
        return redirect()->back();
    }
}
