<footer class="am_footer am-center" style="background: #f2f2f2;">
    <hr style="border:1 dashed #987cb9" width="100%" color=#987cb9 size=1>
    <div class="am-g"> 
        <div class="am-u-sm-6  am-u-md-12 am-u-lg-12">
            <div class="am_footer_con">
                    
                        <span>关于"我要跳槽"</span>
                        <ul>
                            <li><a href="###">关于我们</a></li>
                            <li><a href="###">发展历程</a></li>
                            <li><a href="###">友情链接</a></li>
                        </ul>
                    
            </div>
        </div>
        <div class="am-u-sm-6 am-u-md-12 am-u-lg-12">
            <div class="am-u-sm-12">
                <div class="am_footer_weixin">
                    <img src="{{asset('/img/wx.jpg')}}" alt="">
                    <div class="am_footer_d_gzwx am-icon-weixin">关注微信</div>
                </div>
            </div>
        </div>
    </div>
    <div class="am-u-sm-12">
        <div class="am_info_line"  style="background: #f2f2f2;">
            Copyright(c)2014-2016 <span>我要跳槽</span> All Rights Reserved,京ICP备16041682号
        </div>
    </div>
</footer>
<script src="{{asset('/amaze/js/petshow.js')}}"></script>
<script src="{{asset('/amaze/js/jquery.min.js')}}"></script>
<script src="{{asset('/amaze/js/amazeui.min.js')}}"></script>
<script type="text/javascript">
$(window).scroll(function() {
    if ($(window).scrollTop() > 0) {
        $("#header").addClass('chageheader');
    } else {
        $("#header").removeClass('chageheader');
    }
});
</script>
