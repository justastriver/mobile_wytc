<?php

use Illuminate\Database\Seeder;

class PublishJobs extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('jobs')->insert([
            'title' => "微软中国 Software Tech Leader",
            'subtitle' => "负责windows 10 中国的研发团队",
            'corp_id' => '1',
            'location' => '北京市海淀区中关村东路微软大厦',
            'endtime' =>'1月1日～10月20日',
            'salary'  => '30～40万 (年薪)',
            'education' => '211／985工程大学 计算机专业',
            'experience' => '3-5年工作经验',
            'stars' => random_int(1,5),
            'badges' => '高薪 不加班 年终奖丰厚',
            'view' => random_int(10, 1000),
            'desc' => '',
        ]);
    }
}
