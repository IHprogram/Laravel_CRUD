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

Route::get('index', 'PostsController@index');