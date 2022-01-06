<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\KategoriForum;
use App\Models\Topic;
use App\Models\History;
use Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;


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
        $status = User::getEnumKey('status');
        $pekerjaan = User::getEnumKey('pekerjaan');
        $provinsi = Http::get('https://dev.farizdotid.com/api/daerahindonesia/provinsi')->json();
        return view('pages.profileUser', compact('status', 'pekerjaan', 'provinsi'));
    }

    public function view_topTopics()
    {
        $topics = Topic::join('kategori_forums', 'topics.kategori_forum_id', '=', 'kategori_forums.id')->get(['topics.*', 'kategori_forums.*']);
        return view('pages.top-topics')->with(compact('topics'));
    }

    public function view_history()
    {
        $user = Auth::user();
        $histories = History::where('user_id', '=', $user->id)->get();
        return view('pages.history', compact('histories'));
    }

    public function update_profileUser(Request $request)
    {
        $user = Auth::user();

        if ($request->file('profile_avatar')) {
            $avatar = $request->file('profile_avatar');
            $fileAvatar = $avatar->storeAs('avatar', 'profile_avatar_' . Str::slug($user->name) . '.' . $avatar->extension());
            $user->file = $fileAvatar;
        }

        if ($request->file('profile_cover')) {
            $cover = $request->file('profile_cover');
            $fileCover = $cover->storeAs('cover_img', 'cover_img_' . Str::slug($user->name) . '.' . $cover->extension());
            $user->cover_img = $fileCover;
        }

        $user->name = $request->profile_name;
        $user->email = $request->profile_public_email;
        $user->deskripsi = $request->profile_description;
        $user->birthdate = $request->profile_birthday;
        $user->alamat = $request->profile_city;
        $user->pekerjaan = $request->profile_pekerjaan;
        $user->status = $request->profile_status;
        $user->save();

        return back();
    }
}
