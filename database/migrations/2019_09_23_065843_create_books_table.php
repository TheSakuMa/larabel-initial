<?php

// マイグレーションとはデータベースのバージョンコントロールのような機能である
// アプリケーションデータベースのスキーマの更新をチームで簡単に共有できるようにしてくれる
// ※ スキーマとは、データベースにおいては、データベースの構造を指し、DBMSでサポートされている形式言語で記述される

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 50);
            $table->integer('price');
            $table->string('author', 50)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}
