<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Ket;
use App\Models\Topic;
use App\Models\History;
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
        ->paginate(8);

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

        //update topic
        $update_kategori = Topic::where('id_topic','=',$request->topic_id)->increment('total_voices', 1);

        //update kategori
        $topic_temp = Topic::where('id_topic','=',$request->topic_id)->get()->first();
        $update_kategori = Ket::where('id_ket','=',$topic_temp->ket_id)->increment('total_posts', 1);

        //set history user
        $user = Auth::user();
        $log=History::create([
            'user_id'=>$user->id,
            'history'=>'User telah membuat posting di room topik '.$topic_temp->name_topic
        ]);
        return redirect()->back();
    }
}
