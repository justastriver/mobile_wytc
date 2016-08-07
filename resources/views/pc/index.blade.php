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
        <a href="apply"><b style="color: #ffffff;">马上跳槽</b></a>
      </button>
    </div>
  </div>

<!--advantages 针对用户的特征功能-->
<div class="detail">
  <div class="am-g am-container">
    <div class="am-u-lg-12">
      <h2 class="detail-h2">出色的职业规划，期待和你一起去实现 !</h2>

      <div class="am-g">
        <div class="am-u-lg-3 am-u-md-6 am-u-sm-12 detail-mb">

          <h3 class="detail-h3">
            <i class="am-icon-mobile am-icon-sm"></i>
            移动互联网求职
          </h3>

          <p class="detail-p">
            通过手机即可查看最新的高薪职位，为你智能推荐最好的企业
          </p>
        </div>
        <div class="am-u-lg-3 am-u-md-6 am-u-sm-12 detail-mb">
          <h3 class="detail-h3">
            <i class="am-icon-cogs am-icon-sm"></i>
            无需简历
          </h3>

          <p class="detail-p">
            用“我要跳槽”，您再也不需要撰写简历，高端人才的您还需要写简历，太out了 ！
          </p>
        </div>
        <div class="am-u-lg-3 am-u-md-6 am-u-sm-12 detail-mb">
          <h3 class="detail-h3">
            <i class="am-icon-check-square-o am-icon-sm"></i>
            全程服务支持
          </h3>

          <p class="detail-p">
            我们为您提供全程的职业规划服务
          </p>
        </div>
        <div class="am-u-lg-3 am-u-md-6 am-u-sm-12 detail-mb">
          <h3 class="detail-h3">
            <i class="am-icon-send-o am-icon-sm"></i>
            高效，安全
          </h3>

          <p class="detail-p">
            所有个人隐私信息均加密，在与企业达成面试协议之前，您的个人资料不会泄露给任何企业和个人，保证您的跳槽隐私！
          </p>
        </div>
      </div>
    </div>
  </div>
</div>


   
<!--advantages 针对用户-->
<article>
  <div class="hope">
  <div class="am-g am-container">
    <div class="am-u-lg-4 am-u-md-6 am-u-sm-12 hope-img">
      <img src="{{asset('img/landing.png')}}" alt="" data-am-scrollspy="{animation:'slide-left', repeat: false}">
      <hr class="am-article-divider am-show-sm-only hope-hr">
    </div>
    <div class="am-u-lg-8 am-u-md-6 am-u-sm-12">
      <h2 class="hope-title">我们与您一起，打造最大的职业规划社区</h2>

      <p>
        我们为您全程提供最优质的职业咨询服务，为你推荐最合适的职位，定位高端，从“我要跳槽”开始
      </p>
    </div>
  </div>
</div>
</article>


@include('pc.contact_me')




 @include('pc.footer')

</body></html>