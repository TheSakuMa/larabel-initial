<?php

use Illuminate\Database\Seeder;

// デフォルトで定義されているクラス
// このクラスから call メソッドを使って他の初期値設定クラスを呼び出すことで、シーディングの順番をコントロールできる

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      // BooksTableSeederを読み込むように設定
      $this->call(BooksTableSeeder::class);
    }
}
