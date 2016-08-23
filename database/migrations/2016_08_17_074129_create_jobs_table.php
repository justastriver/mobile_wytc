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
            $table->string('subtitle');//sub title
            $table->string('joblevel');//
            $table->integer('corp_id');//company id
            $table->string('location');
            $table->string('endtime');
            $table->string('salary');
            $table->string('education');
            $table->string('experience');
            $table->integer('stars');//1-5
            $table->string('badges');
            $table->string('email');//contact
            $table->integer('view');
            $table->text('desc');  
            $table->integer('status');//0-created, being verify ,1-check ok, publishing, 2-out of time
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
