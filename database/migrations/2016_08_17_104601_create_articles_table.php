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
            $table->string('author');
            $table->string('pubtime');
            $table->string('abstract');
            $table->string('source');
            $table->string('author_photo');
            $table->string('content');//
            $table->integer('view');
            $table->string('type');
            $table->string('thumbnail');
            
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
