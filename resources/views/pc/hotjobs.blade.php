<!DOCTYPE html>
<!-- saved from url=(0028)http://amazeui.org/showcase/ -->
<html class="js cssanimations">

@include('pc.head')


<body class="am-with-topbar-fixed-top">
  
@include('pc.header')

  <!-- banner -->
  <div class="bgimg bgimg-ext" >
    <div class="am-container">
      <h1 class="am-animation-slide-right">中国首个高端职位推荐平台－“我要跳槽”</h1>
      <h2 class="am-animation-scale-up">高薪职位</h2>
      <button type="button" class="am-btn am-btn-secondary am-radius am-animation-slide-bottom">
        <a href="apply" target="_blank"><b style="color: #ffffff;">马上跳槽</b></a>
      </button>
    </div>
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

 @include('pc.footer')

</body></html>