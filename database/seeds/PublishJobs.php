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
            'title' => "技术经理-汽车之家",
            'subtitle' => "负责违章查询App服务端的技术架构",
            'corp_id' => '1',
            'location' => '北京市丹棱街3号中国电子大厦B座10层',
            'endtime' =>'1月1日～10月20日',
            'salary'  => '30～40万 (年薪)',
            'education' => '211／985工程大学 计算机专业',
            'experience' => '5-10年工作经验',
            'skills'  => 'Java或.NET',
            'stars' => random_int(1,5),
            'badges' => '福利待遇优厚 年终奖丰厚',
            'view' => random_int(10, 1000),
            'desc' => '有主导大型平台系统研发的经历，有良好的组件及建模能力，擅长平台架构设计、熟悉系统性能优化，能够设计复杂、高并发、大数据量的系统',
        ]);
    }
}
