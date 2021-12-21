<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\KategoriForum;
use App\Models\Topic;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('pages.home');
    }

    public function view_home()
    {
        return view('pages.home');
    }

    public function view_login()
    {
        return view('pages.login');
    }

    public function view_profileUser($id)
    {
        $get_user = User::find($id);
        return view('pages.profile-user2', compact('get_user'));
    }
    
}
