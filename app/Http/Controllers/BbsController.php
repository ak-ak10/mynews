<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BbsController extends Controller
{
    public function index(){
        return view('bbs.index');
    }
    public function create(Request $request){
        echo "bbs/index.blade.phpのinput(name='hoge')に入力された値は $request->hoge です<br>";
        echo "bbs/index.blade.phpのinput(name='body')に入力された値は $request->body です";
    }
}
