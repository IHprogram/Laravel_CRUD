<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    // helloメソッドを追加
    public function hello()
    {
        echo 'hello world!<br>';
        echo 'コントローラー';
    }

    // indexメソッド
    public function index()
    {
        $list = DB::table('posts')->get();
        return view('posts.index', ['list'=>$list]);
    }
}