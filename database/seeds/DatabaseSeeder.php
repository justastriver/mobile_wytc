<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->seedUsers();
        $this->seedCompany();
        $this->seedJobs();
    }
    private function seedUsers()
    {
    	for($i = 0;$i<10;$i++) {
			DB::table('users')->insert([
	            'name' => str_random(10),
	            'email' => str_random(10).'@gmail.com',
	            'password' => bcrypt('secret'),
	            'wechat' => str_random(8),
	            'phone' => random_int(1000, 10000000),
	        ]);
		}
    }
    private function seedCompany()
    {
    	
		DB::table('company')->insert([
        	'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('secret'),
            'wechat' => str_random(8),
            'phone' => random_int(1000, 10000000),
            'company' => "微软中国",
            'branch' => "Windows",
            'location' => "北京市海淀区中关村东路微软大厦",
            'step' => '上市公司',
            'staffs' => '10000+',
        ]);
    	DB::table('company')->insert([
        	'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('secret'),
            'wechat' => str_random(8),
            'phone' => random_int(1000, 10000000),
            'company' => "百度",
            'branch' => "基础架构部",
            'location' => "北京市海淀区西二旗百度大厦",
            'step' => '上市公司',
            'staffs' => '50000',
        ]);
    
    }
    private function seedJobs()
    {
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

        DB::table('jobs')->insert([
            'title' => "百度IDL技术经理",
            'subtitle' => "负责百度深度技术团队管理，IDL架构设计",
            'corp_id' => '2',
            'location' => '北京市海淀区西二旗百度大厦',
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
