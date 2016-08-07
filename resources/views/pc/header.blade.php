<!--[if lte IE 9 ]>
  <div class="am-alert am-alert-danger ie-warning" data-am-alert>
    <button type="button" class="am-close">&times;</button>
    <div class="am-container">
      365 安全卫士提醒：你的浏览器太古董了，妹子无爱，
      <a
    href="http://browsehappy.com/" target="_blank">速速点击换一个</a>
      ！
    </div>
  </div>
  <![endif]-->
  
<header class="am-topbar am-topbar-inverse am-topbar-fixed-top headercolor" id="header">
    <div class="am-container">
      <h1 class="am-topbar-brand am-text-ir am-text-ir-ext">
        <a href="apply">我要跳槽</a>
      </h1>

      <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-secondary am-show-sm-only" data-am-collapse="{target: &#39;#doc-topbar-collapse&#39;}">
        <span class="am-sr-only">导航切换</span>
        <span class="am-icon-bars"></span>
      </button>

      <div class="am-collapse am-topbar-collapse am-topbar-right" id="doc-topbar-collapse">
        <ul class="am-nav am-nav-pills am-topbar-nav">
        @if($index=='corps')
        <li class="am-active">
        @else
          <li>
        @endif
            <a href="corps">企业服务</a>
          </li>
          @if($index=='home')
          <li class="am-active">
          @else
        <li>
        @endif
            <a href="home">人才</a>
          </li>
          @if($index=='hotjobs')
          <li class="am-active">
          @else
        <li>
        @endif
            <a href="hotjobs">高薪职位</a>
          </li>         
          @if($index=='apply')
          <li class="am-active">
          @else
        <li>
        @endif
            <a href="apply">马上跳槽</a>
          </li>
          @if($index=='help')
          <li class="am-active">
          @else
        <li>
        @endif
            <a href="help">帮助反馈</a>
          </li>
          @if($index=='contact')
          <li class="am-active">
          @else
        <li>
        @endif
            <a href="contact">联系我们</a>
          </li>
          @if($index=='follow')
          <li class="am-active">
          @else
        <li>
        @endif
            <a href="follow">关注</a>
          </li>
        </ul>
      </div>
    </div>
  </header>