<?php

// シーダ（初期値設定）クラスを使用し、テストデータをデータベースに設定する
// 全シーダクラスは database/seeds に保存する

namespace Database\Seeder;

use Illuminate\Database\Seeder;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      // テーブルのクリア
      DB::table('books')->truncate();

      // 初期データ用意（列名をキーとする連想配列）
      $books = [
        ['name' => 'PHP Book', 'price' => 2000, 'author' => 'PHPER'],
        ['name' => 'Larabel Book', 'price' => 3000, 'author' => null],
        ['name' => 'Ruby Book', 'price' => 2500, 'author' => 'Rubyist']
      ];
      
      // 登録
      foreach($books as $book) {
        \App\Book::create($book);
      }
    }
}
