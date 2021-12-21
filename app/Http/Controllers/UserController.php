<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\KategoriForum;
use App\Models\Topic;
use App\Models\History;
use Auth;


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
        $user = Auth::user();
        $histories = History::where('user_id', '=', $user->id);
        return view('pages.history', compact('histories'));
    }
}
