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
            $table->string('subtitle')->default('');//sub title
            $table->string('joblevel')->default('级别待定');//
            $table->integer('corp_id');//company id
            $table->string('location')->default('北京');
            $table->string('endtime');
            $table->string('salary')->default('约30万（年薪）');
            $table->string('education')->default('教育背景不限');
            $table->string('experience')->default('经验不限');
            $table->string('skills')->default('无特殊技能要求');
            $table->integer('stars')->default(3);//1-5
            $table->string('badges')->default('薪资待遇好 公司前景不错');
            $table->string('email');//contact
            $table->integer('view')->default(139);
            $table->text('desc')->default('无特殊要求'); 
            $table->integer('status')->default(0);//0-created, being verify ,1-check ok, publishing, 2-out of time
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
