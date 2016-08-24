<footer class="am_footer">
    <div class="am_footer_con">
        <div class="am_footer_link">
            <span>关于"我要跳槽"</span>
            <ul>
                <li><a href="contact">关于我们</a></li>
                <li><a href="contact">发展历程</a></li>
                <li><a href="http://m.woyaotiaocao.com/">“我要跳槽”移动</a></li>
            </ul>
        </div>
        <div class="am_footer_don">
            <span>我要跳槽</span>
            <dl>
                <dt><img src="{{asset('/img/footdon.png?1')}}" alt=""></dt>
                <dd>为您量身定制专属职位，高薪跳槽，无需简历，好工作就是这么屌！
                    <a href="###" class="footdon_pg ">
                        <div class="foot_d_pg am-icon-apple "> App store</div>
                    </a>
                    <a href="###" class="footdon_az animated">
                        <div class="foot_d_az am-icon-android "> Android</div>
                    </a>
                </dd>
            </dl>
        </div>
        <div class="am_footer_erweima">
            <div class="am_footer_weixin"><img src="{{asset('/img/wx.jpg')}}" alt="">
                <div class="am_footer_d_gzwx am-icon-weixin"> 关注微信</div>
            </div>
            <div class="am_footer_ddon"><img src="{{asset('/img/wx.jpg')}}" alt="">
                <div class="am_footer_d_dxz am-icon-cloud-download"> 扫码下载</div>
            </div>
        </div>
    </div>
    <div class="am_info_line">Copyright(c)2014-2016 <span>我要跳槽</span> All Rights Reserved, 京ICP备16041682号</div>
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
