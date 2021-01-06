<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('hello', function(){
//     echo 'Hello World!';
// });

// PostsControllerのhelloメソッド」という指定を意味している
Route::get('hello', 'PostsController@hello');

// 次のURLでみることができる → http://homestead.dawn/index
Route::get('index', 'PostsController@index');

// 投稿画面へのルーティング（URL：http://homestead.dawn/post/create-form）
Route::get('post/create-form', 'PostsController@createForm');

// 登録処理に関するルーティング
Route::post('create', 'PostsController@create');

// GETで通信と一緒に送られるパラメータを受け取るには、web.php内に変数名を用意する必要がある
// 書き方は「$変数名」ではなく「{変数名}」となる
// 更新画面へのルーティング
Route::get('post/{id}/update-form', 'PostsController@updateForm');

// 更新処理に関するルーティング
Route::post('post/update', 'PostsController@update');
