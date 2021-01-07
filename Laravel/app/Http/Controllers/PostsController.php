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

    public function createForm()
    {
        return view('posts.createForm');
    }

    // 以下のcreateメソッドは、ブラウザに表示されず、登録処理だけを行うメソッド。
    // POST通信で、フォームから値が送られる場合は、
    // 引数に用意してある$request変数の中に値(パラメータ)が渡されることになる
    public function create(Request $request)
    {
        // その中から、<input>タグのname属性が「newPost」
        // と指定されていたところの値を$post変数内に入れている
        $post = $request->input('newPost');
        // あとは、postsテーブルのpostカラムに、$post変数を当てはめて登録を行っている
        DB::table('posts')->insert([
            'post' => $post
        ]);

        return redirect('/index');
    }

    public function updateForm($id)
    {
        // テーブルから値を$post変数に入れる
        $post = DB::table('posts')
        ->where('id', $id)
        ->first();
        // compact関数で値をビュー側に渡す
        return view('posts.updateForm', compact('post'));
    }

    // データの更新（Update）を行うメソッド
    public function update(Request $request)
    {
        $id = $request->input('id');
        // <input>タグのname属性が「newPost」
        // と指定されていたところの値を$post変数内に入れている
        $up_post = $request->input('upPost');
        DB::table('posts')
            ->where('id', $id)
            ->update(
                ['post' => $up_post]
            );
        return redirect('/index');
    }

    // データの削除（Delete）を行うメソッド
    public function delete($id)
    {
        DB::table('posts')
            ->where('id', $id)
            ->delete();

        return redirect('/index');
    }
}