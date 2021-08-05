<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class BbsController extends Controller
{
    public function index(){
        return view('bbs.index');
    }
    public function create(Request $request){
        echo "bbs/index.blade.phpのinput(name='hoge')に入力された値は $request->hoge です<br>";
        echo "bbs/index.blade.phpのinput(name='body')に入力された値は $request->body です";
        $post = new Post;
        $post->title = $request->hoge;
        $post->body = $request->body;
        $post->save();
    }
}
