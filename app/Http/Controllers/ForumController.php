<?php

namespace App\Http\Controllers;

use App\Models\Ket;
use App\Models\Topic;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use DB;
use Auth;


class ForumController extends Controller
{
    public function view_forum()
    {
        $kategoris = Ket::all()->sortBy("id");
        $topics = Topic::all();
        // $contents = DB::table('topics')
        // ->select('topics.name_topic', 'topics.id_topic','topics.ket_id', 'kets.name_kategori', 'kets.desc', 'kets.id_ket')
        // ->join('kets','topics.ket_id','=','kets.id_ket')
        // ->get();
        return view('pages.main-forum')->with(compact('topics', 'kategoris'));
    }

    public function view_listTopic($slug)
    {
        // return $id;
        $kategori = Ket::where('slug_kat','=',$slug)->get();
        $topics = DB::table('topics')
        ->select('topics.name_topic', 'topics.slug_topic', 'topics.created_at', 'topics.id_topic','topics.ket_id', 'kets.name_kategori', 'kets.desc', 'kets.id_ket', 'users.name')
        ->join('kets','topics.ket_id','=','kets.id_ket')
        ->join('users', 'topics.user_id','=','users.id')
        ->where('kets.slug_kat','=',$slug)
        ->get();
        $last_topic = DB::table('topics')
        ->select('topics.created_at','users.name')
        ->join('kets','topics.ket_id','=','kets.id_ket')
        ->join('users', 'topics.user_id','=','users.id')
        ->where('kets.slug_kat','=',$slug)
        ->orderBy('topics.id_topic', 'desc')
        ->limit(1)
        ->get();
        return view('pages.list-topics')->with(compact('topics', 'kategori', 'last_topic'));
    }

    public function create_topic($slug)
    {
        $data = Ket::where('slug_kat', $slug)->get()->first();
        $kategoris = Ket::all();
        return view('pages.createTopic')->with(compact('data', 'kategoris'));
    }

    public function saveNewTopic(Request $request)
    {
        // $request->validate([
        //     'name'=>'required',
        //     'kategori_forum_id'=>'required'
        // ]);
        $user = Auth::user();
        $kategori = Ket::where('id_ket', $request->kategori_id)->get()->first();
        $data= array(
            'ket_id'=>$request->kategori_id,
            'user_id'=>$user->id,
            'name_topic'=>$request->name,
            'slug_topic'=>Str::slug($request->name, '-'),
            'is_pinned'=>0,
        );
        Topic::create($data);
        return redirect()->route('listTopic', $kategori->slug_kat);
    }

    public function view_topTopics()
    {
        $topics = DB::table('topics')
        ->select('topics.name_topic', 'topics.slug_topic', 'topics.created_at', 'topics.id_topic','topics.ket_id', 'kets.name_kategori', 'kets.desc', 'kets.id_ket','kets.slug_kat', 'users.name')
        ->join('kets','topics.ket_id','=','kets.id_ket')
        ->join('users', 'topics.user_id','=','users.id')
        ->orderBy('topics.id_topic', 'desc')
        ->limit(7)
        ->get();
        return view('pages.top-topics')->with(compact('topics'));
    }
}
