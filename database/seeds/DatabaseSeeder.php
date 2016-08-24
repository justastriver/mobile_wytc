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
        //$this->seedUsers();
        //$this->seedCompany();
        //$this->seedJobs();
        $this->seedArticles();
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
    private function seedArticles()
    {
    	$content = "<p>在国家不包分配、个体可以自由流动的今天，十几年甚至一辈子呆在一家公司的情况已不多见，跳槽成了我们职业生涯中的一件平常事。跳槽是要冒风险的，一次成功的跳槽可能使你的职业生涯“柳暗花明又一村”，但一次失败的跳槽也能让你“前功尽弃”，“功败垂成”。职业生涯的成败与跳槽有着密切的联系，为此我们要积极对待跳槽，让每一次的跳槽都能推动职业生涯向前发展。</p><p><strong>跳槽的作用</strong></p><p>现实中很多人是对现有工作不满才会想到跳槽，譬如人际关系不好，工作太久厌倦了。为了尽快地改变现有的状态，往往缺乏准备，“病急乱投医”。然而下一家公司也不一定就解决了它面临的问题，于是再换，导致他们跳槽频繁，影响职业生涯的上升。</p></p>这是现在人们跳槽中最大的一个误区。究其原因，是没有正确理解跳槽的作用。其实跳槽对于改变工作状态与环境的效果微乎其微。原因很简单，现在的公司人际关系复杂，你如何保证下一家公司人际关系不复杂？人际关系如何，除非你认识公司内部的人，否则只有在你进入公司后才能知道；它不像薪资，可以在进公司之前就确定。换句话说，为了诸如这样的原因跳槽你的成功概率只有50%，你要承担50%失败的风险。你觉得值得吗？</p><p>跳槽应该以职业目标为中心，为职业目标服务。这家公司能否提升你的职业含金量，才是你最需要考虑的。</p>"."<p><strong>跳槽的准备</strong></p>

        </p>如果你希望一年后换工作，千万不要一年后才开始做准备，更不要把全部希望寄托于公开的招聘信息，猎头公司的电话。成功的跳槽需要主客观因素的契合。即使你有愿望，有能力，也很努力，可是你却没有采取合适的办法，一切也是枉然。为了顺利地跳槽到目标公司，你至少要提前半年，进行如下的精心准备：</p>
    <p>1.彼知己的基础上，明确自己的目标职业、行业、公司</p>
    <p>2.确定目标公司，加深对工作内容与任职要求的理解</p>
    <p>3.职位与公司的要求，制作有针对性的求职信与简历</p>
    <p>4.多种渠道争取面试机会提高面试技巧</p>";

    	DB::table('articles')->insert([
    	
            'title'=>"职场大咖教你如何跳槽",
            'subtitle'=>"职场大咖教你如何跳槽",
            'author'=>"我要跳槽",
            'pubtime'=> "2016-07-10 18:21:03",
            'abstract'=> "在国家不包分配、个体可以自由流动的今天，十几年甚至一辈子呆在一家公司的情况已不多见，跳槽成了我们职业生涯中的一件平常事",
            'source' => "我要跳槽",
            'author_photo' => "http://www.woyaotiaocao/img/q1.jpg",
            'content' => $content,
            'view' => random_int(100,100000),
            'type' => "求职技巧",
            'thumbnail' => "http://www.woyaotiaocao/img/w1.jpg",
            ]);
    }
}
