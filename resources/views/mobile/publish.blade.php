<!doctype html>
<html class="js cssanimations">
@include('mobile.head')
<body style="background:#ececec">
	<section>
		@include('mobile.header')
	</section>
	<section>
		@include('mobile.banner')    
	</section>
    	</section>
        <section>
            <form method="post" class="am-form" data-am-validator="true" action="/publish" onsubmit="return check()">
                <div class="am-u-sm-12 am-u-md-3 am-u-lg-3">
                	<hr>
                </div>
                <div class="am-u-sm-12 am-u-md-6 am-u-lg-6 am-u-lg-end am-u-md-end">
                    <div class="am-panel am-panel-default">
                        <div class="am-panel-hd">
                        	<h2>个人基本信息</h2>
                        </div>
                        <div class="am-panel-bd">
                            <div id="div-name" class="am-input-group am-input-group-primary"><span class="am-input-group-label"><i class="am-icon-user am-icon-fw"></i></span>
                                <input type="text" id="name" name="name" class="am-form-field" placeholder="你的姓名（可以填写昵称）">
                            </div>
                            </br>
                            <div id="div-phone" class="am-input-group am-input-group-primary"><span class="am-input-group-label"><i class="am-icon-phone am-icon-fw"></i></span>
                                <input type="text" id="phone" name="phone" class="am-form-field" placeholder="你的电话（请务必填写准确）">
                            </div>
                            </br>
                            <div id="div-email" class="am-input-group am-input-group-primary"><span class="am-input-group-label"><i class="am-icon-envelope am-icon-fw"></i></span>
                                <input type="text" id="email" name="email" class="am-form-field" placeholder="你的邮箱（请务必填写准确）">
                            </div>
                            </br>
                            <div id="div-wechat" class="am-input-group am-input-group-primary"><span class="am-input-group-label"><i class="am-icon-wechat am-icon-fw"></i></span>
                                <input type="text" id="wechat" name="wechat" class="am-form-field" placeholder="您的微信号（建议填写，方便我们客服跟您联系）">
                            </div>
                            </br>
                            
                            <div id="div-corp" class="am-input-group am-input-group-primary"><span class="am-input-group-label"><i class="am-icon-copyright am-icon-fw"></i></span>
                                <input type="text" id="corp" name="corp" class="am-form-field" placeholder="企业名称(企业用户选填)">
                            </div>
                            </br>
                            

                            <div id="div-info" class="am-input-group am-input-group-primary"><span class="am-input-group-label"><i class="am-icon-info-circle am-icon-fw"></i></span>
                                <input type="text" id="info" name="info" class="am-form-field" placeholder="备注(选填，如：请在xxx时段联系)">
                            </div>
                        </div>
                    </div>

                    <div class="am-panel am-panel-default">
                        <div class="am-panel-hd">
                            <h2>填写职位信息（JD）</h2>
                        </div>
                        <div class="am-panel-bd">
                            <div id="div-name" class="am-input-group am-input-group-primary"><span class="am-input-group-label"><i class="am-icon-user am-icon-fw"></i></span>
                                <input type="text" id="jobtitle" name="jobtitle" class="am-form-field" placeholder="职位标题">
                            </div>
                            </br>
                        </div>
                    </div>
                </div>
                <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
                    <div class="am-u-sm-4  am-u-md-6 am-u-lg-6 lablel">
                        <input type="hidden" id="userType" value="0" />
                        <input type="hidden" id="userType" name="from" value="user" />
                        <input type="hidden" id="userType" name="device" value="mobile" />
                    </div>
                    <div class="am-u-sm-8 am-u-md-6 am-u-lg-6">
                    	<div class="am-u-sm-6">
                        	<button id="submit" class="am-btn am-btn-success">立即申请</button>
                        </div>
                        
                        <hr>
                    </div>
                </div>
            </form>
        </section>
    </body>
	
		<div class="am-container am-u-sm-center" style="background: #f2f2f2;" >
			
			<div class="am-u-sm-12">
			</div>
			<div class="am-u-sm-12"  style="background: #f2f2f2;">
				@include('mobile.footer')
			</div>			
		</div>
	<script language="javascript">

             function check(){
                 var val = document.getElementById("name").value;
                 if(val == ""){
                     var div=document.getElementById("div-name");
                     div.className="am-input-group am-input-group-warning";
                     return false;
                 }
                 val = document.getElementById("phone").value;
                 if(val == ""){
                     var div=document.getElementById("div-phone");
                     div.className="am-input-group am-input-group-warning";
                     return false;
                 }
                 val = document.getElementById("email").value;
                 if(val == ""){
                     var div=document.getElementById("div-email");
                     div.className="am-input-group am-input-group-warning";
                     return false;
                 }
                 val = document.getElementById("wechat").value;
                 if(val == ""){
                     var div=document.getElementById("div-wechat");
                     div.className="am-input-group am-input-group-warning";
                     return false;
                 }
                 return true;
                
             }
     </script>
</html>
