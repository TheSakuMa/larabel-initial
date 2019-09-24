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
    // Larevelは view 関数を呼び出すと、resources/views/ ディレクトリを探しに行く
    // 'welcome'は resources/views/welcome.blade.php を指す
    return view('welcome');
});

// ビューを直接返すのではなく、コントローラを経由するようにルーティングする
// Route::get('book', 'BookController@index');
/* 
  上記の場合、「localhost:8000/book にGETリクエストがきたら、
  BookController の index メソッドに処理を振り分けて」という意味になる。
*/

// Route::resource メソッドを利用することで「CRUD」ルートをコントローラに割り付けることができる
Route::resource('book', 'BookController');
