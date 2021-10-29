<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\KategoriForum;


class UserController extends Controller
{
    public function view_home()
    {
        return view('pages.home');
    }

    public function view_login()
    {
        return view('pages.login');
    }

    public function view_diskusiTopic()
    {
        return view('pages.diskusiTopik');
    }
}
