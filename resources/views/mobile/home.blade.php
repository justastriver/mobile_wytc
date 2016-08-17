<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
    <link rel="stylesheet" href="{{asset('amaze/css/amazeui.min.css')}}">
    <link rel="stylesheet" href="{{asset('amaze/css/wap.css?2')}}">
    <!--<title>我要跳槽－您的跳槽神器，助您快速升职涨薪！</title>-->
    <title>test</title>
    <meta name="keywords" content="跳槽神器,无需简历,涨薪利器,企业招聘神器,大牛跳槽" />
    <meta name="description" content="我要跳槽－您的跳槽神器，助您快速升职涨薪！" />
    <style type="text/css">
    .pet_slider_shadow-ext {
        background: url("{{asset('img/flshadow.png')}}") bottom no-repeat;
    }
    </style>
</head>

<body>
    <div data-am-widget="gotop" class="am-gotop am-gotop-fixed">
        <a href="#top" title="">
            <img class="am-gotop-icon-custom" src="{{asset('img/goTop.png')}}" />
        </a>
    </div>
    <div class="pet_mian" id="top">
        <div data-am-widget="slider" class="am-slider am-slider-a1" data-am-slider='{"directionNav":false}'>
            <ul class="am-slides">
                <li>
                    <img src="{{asset('img/fl01.png')}}">
                    <div class="pet_slider_font">
                        <span class="pet_slider_emoji"> (╭￣3￣)╭♡   </span>
                        <span>“大白”有望成为现实：充气机器人研究取得进展</span>
                    </div>
                    <div class="pet_slider_shadow pet_slider_shadow-ext"></div>
                </li>
                <li>
                    <img src="{{asset('img/fl02.png')}}">
                    <div class="pet_slider_font">
                        <span class="pet_slider_emoji"> []~(￣▽￣)~*　</span>
                        <span>已然魔性的雪橇犬哈士奇 —《雪地狂奔》</span>
                    </div>
                    <div class="pet_slider_shadow pet_slider_shadow-ext"></div>
                </li>
                <li>
                    <img src="{{asset('img/fl03.png')}}">
                    <div class="pet_slider_font">
                        <span class="pet_slider_emoji"> (｡・`ω´･)　</span>
                        <span>《星际争霸2:虚空之遗》国服过审!</span>
                    </div>
                    <div class="pet_slider_shadow pet_slider_shadow-ext"></div>
                </li>
            </ul>
        </div>
        <div class="pet_circle_nav">
            <ul class="pet_circle_nav_list">
                <li>
                    <a href="" class="iconfont pet_nav_xinxianshi am-icon-heart"></a><span>热门职位</span></li>
                <li>
                    <a href="" class="iconfont pet_nav_zhangzhishi am-icon-newspaper-o"></a><span>新闻资讯</span></li>
                <li>
                    <a href="" class="iconfont pet_nav_meirong am-icon-users"></a><span>企业入驻</span></li>
                <li>
                    <a href="" class="iconfont pet_nav_dianpu am-icon-tty"></a><span>关于</span></li>
            </ul>
        </div>
        <div class="pet_content_main">
            <div data-am-widget="list_news" class="am-list-news am-list-news-default">
                <div class="am-list-news-bd">
                    <ul class="am-list">
                        <!--缩略图在标题右边-->
                        <li class="am-g am-list-item-desced am-list-item-thumbed am-list-item-thumb-right pet_list_one_block">
                            <div class="pet_list_one_info">
                                <div class="pet_list_one_info_l">
                                    <div class="pet_list_one_info_ico"><img src="{{asset('img/a1.png')}}" alt=""></div>
                                    <div class="pet_list_one_info_name">Super invincible 菁 </div>
                                </div>
                                <div class="pet_list_one_info_r">
                                    <div class="pet_list_tag pet_list_tag_xxs">新鲜事</div>
                                </div>
                            </div>
                            <div class=" am-u-sm-8 am-list-main pet_list_one_nr">
                                <h3 class="am-list-item-hd pet_list_one_bt"><a href="article?id=1" class="">十一长假哪也不去，宅在家里看电影！</a></h3>
                                <div class="am-list-item-text pet_list_one_text">每逢长假，总有那么一群人选择远离人山人海，静静地呆在家，坐在电脑电视前。长时间的工作学习让他们感觉很疲惫，对什么都提不起劲，打开电脑却不知道干什么好…</div>
                            </div>
                            <div class="am-u-sm-4 am-list-thumb">
                                <a href="article?id=1" class="">
                                    <img src="{{asset('img/q1.jpg')}}" class="pet_list_one_img" alt="" />
                                </a>
                            </div>
                        </li>
                    </ul>

                    @foreach($articles as $article)
                    <ul class="am-list">
                        <!--缩略图在标题右边-->
                        <li class="am-g am-list-item-desced am-list-item-thumbed am-list-item-thumb-right pet_list_one_block">
                            <div class="pet_list_one_info">
                                <div class="pet_list_one_info_l">
                                    <div class="pet_list_one_info_ico"><img src="{{asset('img/a1.png')}}" alt=""></div>
                                    <div class="pet_list_one_info_name">{{$article->author}} </div>
                                </div>
                                <div class="pet_list_one_info_r">
                                    <div class="pet_list_tag pet_list_tag_xxs">{{$article->type}}</div>
                                </div>
                            </div>
                            <div class=" am-u-sm-8 am-list-main pet_list_one_nr">
                                <h3 class="am-list-item-hd pet_list_one_bt"><a href="article?id={{$article->id}}" class="">{{$article->title}}</a></h3>
                                <div class="am-list-item-text pet_list_one_text">{{$article->abstract}}…</div>
                            </div>
                            <div class="am-u-sm-4 am-list-thumb">
                                <a href="article?id={{$article->id}}" class="">
                                    <img src="{{asset('img/q1.jpg')}}" class="pet_list_one_img" alt="" />
                                </a>
                            </div>
                        </li>
                    </ul>
                    @endforeach

                </div>
            </div>
        </div>
        <div class="pet_article_dowload pet_dowload_more_top_off">
            <div class="pet_article_dowload_title">关于</div>
            <div class="pet_article_dowload_content pet_dowload_more_top_bg">
                <div class="pet_article_dowload_triangle pet_dowload_more_top_san"></div>
                <div class="pet_article_dowload_ico"><img src="{{asset('img/footdon.png')}}" alt=""></div>
                <div class="pet_article_dowload_content_font">
                    <p>专注互联网中高端职位精准推荐，服务高端人才，服务互联网企业！</p>
                </div>
                <div class="pet_article_dowload_all">
                    <a href="###" class="pet_article_dowload_Az am-icon-apple"> App store</a>
                    <a href="###" class="pet_article_dowload_Pg am-icon-android"> Android</a>
                </div>
            </div>
            <div class="pet_article_footer_info">
                <p>Copyright(c)2014-2016 <span>我要跳槽</span> All Rights Reserved</p>
            </div>
        </div>
    </div>
    <script src="{{asset('amaze/js/jquery.min.js')}}"></script>
    <script src="{{asset('amaze/js/amazeui.min.js')}}"></script>
    <script>
    $(function() {

        // 动态计算新闻列表文字样式
        auto_resize();
        $(window).resize(function() {
            auto_resize();
        });
        $('.am-list-thumb img').load(function() {
            auto_resize();
        });

        $('.am-list > li:last-child').css('border', 'none');

        function auto_resize() {
            $('.pet_list_one_nr').height($('.pet_list_one_img').height());

        }
        $('.pet_nav_gengduo').on('click', function() {
            $('.pet_more_list').addClass('pet_more_list_show');
        });
        $('.pet_more_close').on('click', function() {
            $('.pet_more_list').removeClass('pet_more_list_show');
        });
    });
    </script>
</body>

</html>
