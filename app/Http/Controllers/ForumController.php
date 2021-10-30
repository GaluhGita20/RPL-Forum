<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KategoriForum;
use App\Models\Topic;

class ForumController extends Controller
{
    public function view_forum()
    {
        $kategoris = KategoriForum::all()->sortBy("id");
        // $kategori_terakhir = KategoriForum::latest();
        // $tgl = $kategori_terakhir->created_at;
        return view('pages.main-forum')->with(compact('kategoris'));
    }

    public function view_listTopic($slug)
    {
        // return $id;
        $data = KategoriForum::where('slug', $slug)->firstOrFail();
        $id = KategoriForum::where('slug', $slug)->get('id')->first();
        $topics= Topic::all();
        
        // $topics=Topic::with('kategori_forums')->where('kategori_forum_id', $id)->get();
        return view('pages.list-topics')->with(compact('topics', 'data'));
    }

    public function create_topic($slug)
    {
        $data = KategoriForum::where('slug', $slug)->get()->first();
        $kategoris = KategoriForum::all();
        return view('pages.createTopic')->with(compact('data', 'kategoris'));
    }

    public function saveNewTopic(Request $request)
    {
        // $request->validate([
        //     'name'=>'required',
        //     'kategori_forum_id'=>'required'
        // ]);
        $kategori = KategoriForum::where('id', $request->kategori_forum_id)->get()->first();
        $data= array(
            'name'=>$request->name,
            'kategori_forum_id'=>$kategori->id,
            'is_pinned'=>1,
        );
        Topic::create($data);
        return redirect()->route('listTopic', $kategori->slug);
    }
}
