<!DOCTYPE html>
<!-- saved from url=(0028)http://amazeui.org/showcase/ -->
<html class="js cssanimations">

@include('pc.head')


<body class="am-with-topbar-fixed-top">
  
@include('pc.header')

  <!-- banner -->
  <div class="bgimg-normal">
  </div>

  <article>
    <div class="am-container" id="caseimgs">
      <div class="am-tabs" data-am-tabs="">
        <ul class="am-tabs-nav am-nav am-nav-tabs">
          <li class="am-active">
            <a href="hotjobs">最新职位</a>
          </li>
          <li>
            <a href="corps">合作企业</a>
          </li>
        </ul>
      </div>
    </div>
  </article>

<div class="bg-container" style="text-align: center;">
  <h2>请扫码下图二维码，关注我们的微信公众号“我要跳槽”，获取最新的职位信息</h2>
  </br>
  <img src="{{asset('img/wx.jpg')}}"></div>
  </br>
 </div>
 
 @include('pc.footer')

</body></html>