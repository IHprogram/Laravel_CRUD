<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    // helloメソッドを追加
    public function hello()
    {
        echo 'hello world!<br>';
        echo 'コントローラー';
    }
}