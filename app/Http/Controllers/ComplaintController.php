<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComplaintController extends Controller
{
    //
    public function newcomplaints()
    {
        //
        return view('cms-pages.newcomplaints.newcomplaints');
    }

    //
    public function complaints()
    {
        //
        return view('cms-pages.complaints.complaints');
    }
}
