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
                                <input type="text" id="corp" name="corp" class="am-form-field" placeholder="企业名称(建议填写，企业名称)">
                            </div>
                            </br>
                            

                        </div>
                    </div>

                    <div class="am-panel am-panel-default">
                        <div class="am-panel-hd">
                            <h2>填写职位基本信息（JD-1）</h2>
                        </div>
                        <div class="am-panel-bd">
                            <div id="div-name" class="am-input-group am-input-group-primary"><span class="am-input-group-label"><i class="am-icon-user am-icon-fw"></i></span>
                                <input type="text" id="title" name="title" class="am-form-field" placeholder="职位标题（如xxx招聘资深架构师）">
                            </div>
                            </br>
                            <div id="div-name" class="am-input-group am-input-group-primary"><span class="am-input-group-label"><i class="am-icon-user am-icon-fw"></i></span>
                                <input type="text" id="subtitle" name="subtitle" class="am-form-field" placeholder="职位副标题（选填）">
                            </div>
                            </br>
                            <div id="div-name" class="am-input-group am-input-group-primary"><span class="am-input-group-label"><i class="am-icon-user am-icon-fw"></i></span>
                                <input type="text" id="joblevel" name="joblevel" class="am-form-field" placeholder="职位级别（如百度M－2a）">
                            </div>
                            </br>
                             <div id="div-name" class="am-input-group am-input-group-primary"><span class="am-input-group-label"><i class="am-icon-user am-icon-fw"></i></span>
                                <input type="text" id="location" name="location" class="am-form-field" placeholder="工作地点（如北京朝阳区xxx）">
                            </div>
                            </br>
                             <div id="div-name" class="am-input-group am-input-group-primary"><span class="am-input-group-label"><i class="am-icon-user am-icon-fw"></i></span>
                                <input type="text" id="salary" name="salary" class="am-form-field" placeholder="薪资待遇（填写年薪，如50-100万）">
                            </div>
                            </br>
                             
                        </div>
                    </div>

                    <div class="am-panel am-panel-default">
                        <div class="am-panel-hd">
                            <h2>填写职位附加信息（JD-2,可不填写）</h2>
                        </div>
                        <div class="am-panel-bd">
                            <div id="div-name" class="am-input-group am-input-group-primary"><span class="am-input-group-label"><i class="am-icon-user am-icon-fw"></i></span>
                                <input type="text" id="education" name="education" class="am-form-field" placeholder="教育背景要求（如：985工程学校，硕士，数学专业）">
                            </div>
                            </br>
                             <div id="div-name" class="am-input-group am-input-group-primary"><span class="am-input-group-label"><i class="am-icon-user am-icon-fw"></i></span>
                                <input type="text" id="experience" name="experience" class="am-form-field" placeholder="工作经验（如：3年以上）">
                            </div>
                            </br>
                             <div id="div-name" class="am-input-group am-input-group-primary"><span class="am-input-group-label"><i class="am-icon-user am-icon-fw"></i></span>
                                <input type="text" id="badges" name="badges" class="am-form-field" placeholder="特色（如：扁平化管理，升职空间大，涨薪幅度大等,空格分割）">
                            </div>
                            </br>
                             <div id="div-name" class="am-input-group am-input-group-primary"><span class="am-input-group-label"><i class="am-icon-user am-icon-fw"></i></span>
                                <input type="text" id="desc" name="desc" class="am-form-field" placeholder="其他（附加信息说明）">
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
                        	<button id="submit" class="am-btn am-btn-success">立即发布</button>
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
