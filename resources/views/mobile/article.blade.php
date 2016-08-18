<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
    <meta name="keywords" content="跳槽神器,无需简历,涨薪利器,企业招聘神器,大牛跳槽" />
    <meta name="description" content="我要跳槽－您的跳槽神器，助您快速升职涨薪！" />
    <link rel="alternate icon" type="image/png" href="{{asset('/img/favicon.png')}}">
    <link rel="stylesheet" href="{{asset('amaze/css/amazeui.min.css')}}">
    <link rel="stylesheet" href="{{asset('amaze/css/wap.css')}}">
    <title>{{$article->title}}</title>
</head>

<body style="background:#ececec">
    <div class="pet_mian">
        <div class="pet_head">
            @include('mobile.header')
        </div>
        <div class="pet_more_list">
            <div class="pet_more_list_block">
            </div>
        </div>
        <div class="pet_content">
            
            <div class="pet_content_block">
                <article data-am-widget="paragraph" class="am-paragraph am-paragraph-default pet_content_article" data-am-paragraph="{ tableScrollable: true, pureview: true }">
                    <h1 class="pet_article_title">{{$article->title}}</h1>
                    <div class="pet_article_user_time">发表于：{{$article->pubtime}}</div>
                    <img src="{{$article->thumbnail}}">
                    {{$article->content}}
                </article>

                <ul class="like_share_block">
                    <li><a class="link_share_button" href="###"><i class="iconfont am-icon-eye"></i>{{$article->view}}</a></li>
                    <li><a class="link_share_button" href="###"><i class="iconfont am-icon-weixin"></i>微信</a></li>
                    <li><a class="link_share_button" href="###"><i class="iconfont am-icon-qq"></i>朋友圈</a></li>
                </ul>
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
        $('.pet_article_like li:last-child').css('border', 'none');

        function auto_resize() {
            $('.pet_list_one_nr').height($('.pet_list_one_img').height());
            // alert($('.pet_list_one_nr').height());
        }
        $('.pet_article_user').on('click', function() {
            if ($('.pet_article_user_info_tab').hasClass('pet_article_user_info_tab_show')) {
                $('.pet_article_user_info_tab').removeClass('pet_article_user_info_tab_show').addClass('pet_article_user_info_tab_cloes');
            } else {
                $('.pet_article_user_info_tab').removeClass('pet_article_user_info_tab_cloes').addClass('pet_article_user_info_tab_show');
            }
        });

        $('.pet_head_gd_ico').on('click', function() {
            $('.pet_more_list').addClass('pet_more_list_show');
        });
        $('.pet_more_close').on('click', function() {
            $('.pet_more_list').removeClass('pet_more_list_show');
        });
    });
    </script>
</body>

</html>
