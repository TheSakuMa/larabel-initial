<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//以下2行の記述を忘れずに
use App\Http\Controllers\Controller;
use App\Book;


class BookController extends Controller
{
  public function index()
  {
    // DBよりBookテーブルの値を全て取得
    $books = Book::all();

    // 取得した値をビュー「book/index」に渡す
    // compact関数を使うことで簡単に連想配列として渡すことができる
    return view('book/index', compact('books'));
  }

  public function edit($id)
  {
    // DBよりURIパラメータと同じIDを持つBookの情報を取得
    $book = Book::findOrFail($id);

    // 取得した値をビュー「book/edit」に渡す
    return view('book/edit', compact('book'));
  }

  // $requestにはクライアントからのリクエスト情報が入っている
  public function update(Request $request, $id)
  {
    $book = Book::findOrFail($id);
    $book->name = $request->name;
    $book->price = $request->price;
    $book->author = $request->author;
    $book->save();

    return redirect("/book");
  }

  public function destory($id) {
    $book = Book::findOrFail($id);
    $book->delete();

    return redirect("/book");
  }

  public function create()
  {
    // 空の$bookを渡す
    $book = new Book();
    return view('book/create', compact('book'));
  }

  public function store(Request $request)
  {
    $book = new Book();
    $book->name = $request->name;
    $book->price = $request->price;
    $book->author = $request->author;
    $book->save();

    return redirect("/book");
  }
}
