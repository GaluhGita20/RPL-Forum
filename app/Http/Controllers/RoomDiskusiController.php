<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Ket;
use App\Models\Topic;
use App\Models\DiskusiForum;
use Auth;
use DB;

class RoomDiskusiController extends Controller
{
    public function index($slug)
    {
        $room= DB::table('topics')
        ->select('kets.name_kategori', 'kets.slug_kat','topics.id_topic','topics.name_topic','topics.slug_topic', 'topics.user_id')
        ->join('kets','topics.ket_id','=','kets.id_ket')
        ->where('topics.slug_topic','=',$slug)
        ->get();
        $user= Auth::user();

        //post diskusi
        $id_room= Topic::where('topics.slug_topic','=',$slug)->value('id_topic');
        $posts = DB::table('diskusi_forums')
        ->select('diskusi_forums.id_diskusi', 'diskusi_forums.diskusi', 'diskusi_forums.user_id','diskusi_forums.created_at', 'users.name')
        ->join('users','diskusi_forums.user_id','=','users.id')
        ->where('diskusi_forums.topic_id','=',$id_room)
        ->get();

        //last post
        $last_post = DB::table('diskusi_forums')
        ->select('diskusi_forums.id_diskusi', 'diskusi_forums.diskusi', 'diskusi_forums.user_id','diskusi_forums.created_at', 'users.name')
        ->join('users','diskusi_forums.user_id','=','users.id')
        ->where('diskusi_forums.topic_id','=',$id_room)
        ->orderBy('diskusi_forums.id_diskusi', 'desc')
        ->limit(1)
        ->get();
        return view('pages.diskusiTopik')->with(compact('room', 'user', 'posts', 'last_post'));
    }

    public function post_diskusi(Request $request)
    {
        $user = Auth::user();
        $data= array(
            'topic_id'=>$request->topic_id,
            'user_id'=>$user->id,
            'diskusi'=>$request->diskusi,
        );
        DiskusiForum::create($data);
        return redirect()->back();
    }
}
