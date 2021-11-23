<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    public function add_user()
    {
        return view('pages.add-user');
    }

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

    public function view_profileUser()
    {
        return view('pages.profileUser');
    }

    public function view_topTopics()
    {
        $topics=Topic::join('kategori_forums', 'topics.kategori_forum_id', '=', 'kategori_forums.id')->get(['topics.*', 'kategori_forums.*']);
        return view('pages.top-topics')->with(compact('topics'));
    }

    public function view_history()
    {
        return view('pages.history');
    }
}
