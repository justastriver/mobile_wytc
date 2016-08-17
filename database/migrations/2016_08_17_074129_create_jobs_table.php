<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {

            $table->increments('id');
            $table->string('title');
            $table->string('subtitle');
            $table->integer('corp_id');//company id
            $table->string('location');
            $table->string('endtime');
            $table->string('salary');
            $table->string('education');
            $table->string('experience');
            $table->integer('stars');//1-5
            $table->string('badges');
            $table->integer('view');
            $table->string('desc');  
           
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
        Schema::drop('jobs');
    }
}
