<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function user()
    {
        //
        return view('layouts.user');
    }

    public function userdashboard()
    {
        //
        return view('cms-pages.dashboard.user.user');
    }
}
