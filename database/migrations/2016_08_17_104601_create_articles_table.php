<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('subtitle');
            $table->string('author')->default('我要跳槽');
            $table->string('pubtime');
            $table->string('abstract');
            $table->string('source')->default('我要跳槽');
            $table->string('author_photo')->default('http://www.woyaotiaocao/img/q1.jpg');
            $table->mediumText('content');//
            $table->integer('view')->default('397');
            $table->string('type');
            $table->string('thumbnail');
            $table->integer('status')->default(0);
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
        Schema::drop('articles');
    }
}
