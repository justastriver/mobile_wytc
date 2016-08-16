<!DOCTYPE html>
<!-- saved from url=(0028)http://amazeui.org/showcase/ -->
<html class="js cssanimations">
@include('pc.head')

<body class="am-with-topbar-fixed-top">
    @include('pc.header')
    <!-- banner -->
    <div class="bgimg bgimg-ext">
        <div class="am-container">
            <h1 class="am-animation-slide-right">中国首个高端职位推荐平台－“我要跳槽”</h1>
            <h2 class="am-animation-scale-up">寻找牛人</h2>
            <button type="button" class="am-btn am-btn-secondary am-radius am-animation-slide-bottom" onclick="location='publish'">
                <a href="#"><b style="color: #ffffff;">发布需求</b></a>
            </button>
        </div>
    </div>
    <!--advantages 针对企业 de优点-->
    <div class="index-advantages">
        <div class="wid1200 ">
            <h1 class="index-title">企业高端人才招聘</h1>
            <ul>
                <li>
                    <i class="iconfont icon-xuanzeshoujikong"></i>
                    <h2>移动优先</h2>
                    <p>企业可以自主发布高端“职位招聘信息”简单高效</p>
                </li>
                <li>
                    <i class="iconfont icon-yaoyiyao"></i>
                    <h2>定向找牛人</h2>
                    <p>我们提供定向牛人挖掘服务，为企业寻找最合适的牛人</p>
                </li>
                <li>
                    <i class="iconfont icon-kuwanjieicon"></i>
                    <h2>背景调查服务</h2>
                    <p>为企业进行应聘者背景调查，保证应聘者真实信息可靠！</p>
                </li>
                <li>
                    <i class="iconfont icon-shejiao"></i>
                    <h2>面试服务</h2>
                    <p>为企业提供面试服务，提前针对企业的用人需求，进行人才筛选</p>
                </li>
                <li>
                    <i class="iconfont icon-icontongji"></i>
                    <h2>数据统计</h2>
                    <p>强大的数据统计功能，分析企业的用人情况，薪资和发展数据</p>
                </li>
            </ul>
        </div>
    </div>
    <!--zan-->
    <div class="index-zan index-zan-ext">
        <div class="zan-text">
            <h1>为企业寻找到牛人，为牛人找到最好的职业</h1>
            <!-- <a href="#"><i class="iconfont icon-duanxinchongzhi1"></i></a><br/> -->
            <span><strong>100</strong>+ 企业正在使用</span>
            <br />
            <span><strong>10000</strong>+ 牛人正在使用</span>
            <br />
            <p>“我要跳槽”－－为互联网而生</p>
        </div>
    </div>
    <!--link-->
    <div class="index-link">
        <h1 class="index-title">这些企业选择了我们</h1>
        <div class="wid1200">
            <div class="am-g">
                <div class="am-u-sm-2"><img src="{{asset('img/logo1.jpg')}}" /></div>
                <div class="am-u-sm-2"><img src="{{asset('img/logo2.jpg')}}" /></div>
                <div class="am-u-sm-2"><img src="{{asset('img/logo3.jpg')}}" /></div>
                <div class="am-u-sm-2"><img src="{{asset('img/logo4.jpg')}}" /></div>
                <div class="am-u-sm-2"><img src="{{asset('img/logo5.jpg')}}" /></div>
                <div class="am-u-sm-2"><img src="{{asset('img/logo6.jpg')}}" /></div>
            </div>
            <div class="am-g">
                <div class="am-u-sm-2"><img src="{{asset('img/logo7.jpg')}}" /></div>
                <div class="am-u-sm-2"><img src="{{asset('img/logo8.jpg')}}" /></div>
                <div class="am-u-sm-2"><img src="{{asset('img/logo9.jpg')}}" /></div>
                <div class="am-u-sm-2"><img src="{{asset('img/logo10.jpg')}}" /></div>
                <div class="am-u-sm-2"><img src="{{asset('img/logo11.jpg')}}" /></div>
                <div class="am-u-sm-2"><img src="{{asset('img/logo12.jpg')}}" /></div>
            </div>
        </div>
    </div>
    
</body>
@include('pc.footer')
</html>
