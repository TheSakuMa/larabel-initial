<?php
/**
 * Eloquent ORM はLaravelでデータ操作をするための実装である
 * このBookモデルはbooksテーブルにマッピングされており、テーブルの登録や取得更新などので操作を行っている
 * Bookモデルとした場合、特に指定しなければ、命名規則によりbooksテーブルとマッピングされる。
 */
namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    //
}
