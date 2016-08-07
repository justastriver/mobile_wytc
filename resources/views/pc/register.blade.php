<!--注册页面-->
<div class="wid1200 padtop50 clearfix regbox">
	<div class="am-tabs" data-am-tabs="{noSwipe: 1}" id="doc-tab-demo-1">
		<ul class="am-tabs-nav am-nav am-nav-tabs">
			<li class="am-active"><a href="javascript: void(0)">个人用户</a></li>
			<li><a href="javascript: void(0)">企业用户</a></li>
		</ul>

		<div class="am-tabs-bd">
			<div class="am-tab-panel am-active">
				  <form method="post" class="am-form" data-am-validator="true" action="/user/register">
				      <div class="am-u-md-6">
				      	<div class="am-u-md-12 am-form-group">
				      		<div class="am-u-md-3 lablel"><em>*</em>邮箱</div>
				      		<div class="am-u-md-9"><input type="email" class="" placeholder="邮箱地址" required="required" name="loginName" /></div>
				      	</div>
				      	<div class="am-u-md-12 am-form-group">
				      		<div class="am-u-md-3 lablel"><em>*</em>昵称</div>
				      		<div class="am-u-md-9"><input type="text" class="" placeholder="昵称" required="required" name="userName" /></div>
				      	</div>
				      	<div class="am-u-md-12 am-form-group">
				      		<div class="am-u-md-3 lablel"><em>*</em>密码</div>
				      		<div class="am-u-md-9"><input type="password" id="doc-vld-pwd-1" class="" placeholder="密码" required="required" name="password" /></div>
				      	</div>
				      	<div class="am-u-md-12 am-form-group">
				      		<div class="am-u-md-3 lablel"><em>*</em>确认密码</div>
				      		<div class="am-u-md-9"><input type="password" class="" placeholder="重复密码" data-equal-to="{id:#doc-vld-pwd-1}" required="required" /></div>
				      	</div>
				      	<div class="am-u-md-12 am-form-group">
				      		<div class="am-u-md-3 lablel"><em>*</em>验证码</div>
				      		<div class="am-u-md-3"><img id="images" class="yzm" alt="" src="/draw/image" /></div>
				      		<div class="am-u-md-6"><input type="text" class="" placeholder="输入验证码" required="required" name="checkCode" /></div>
				      	</div>
				      	
				      	<div class="am-u-md-12 am-form-group">
				      		<div class="am-u-md-3 lablel"><input type="hidden" id="userType" value="0" /></div>
				      		<div class="am-u-md-9"><button id="submit" class="am-btn am-btn-success">确认注册</button></div>
				      	</div>
				      </div>
			      </form>
			      <div class="am-u-md-6">请留下您的联系方式，我们会尽快与您沟通用人需求</div>
			</div>
			<div class="am-tab-panel">
			     <div class="am-u-md-6 am-form">
					
					<div class="am-u-md-12"><span class="title">账号信息</span></div>

			      	<div class="am-u-md-12 am-form-group">
			      		<div class="am-u-md-3 lablel"><em>*</em>邮箱</div>
			      		<div class="am-u-md-9"><input type="email" class="" placeholder="邮箱地址" /></div>
			      	</div>
			      	<div class="am-u-md-12 am-form-group">
			      		<div class="am-u-md-3 lablel"><em>*</em>密码</div>
			      		<div class="am-u-md-9"><input type="password" class="" placeholder="密码" /></div>
			      	</div>
			      	<div class="am-u-md-12 am-form-group">
			      		<div class="am-u-md-3 lablel"><em>*</em>确认密码</div>
			      		<div class="am-u-md-9"><input type="password" class="" placeholder="重复密码" /></div>
			      	</div>
					
					<div class="am-u-md-12"><span class="title">联系人信息</span></div>

					<div class="am-u-md-12 am-form-group">
			      		<div class="am-u-md-3 lablel"><em>*</em>联系人</div>
			      		<div class="am-u-md-9"><input type="text" class="" placeholder="联系人名称" /></div>
			      	</div>
					<div class="am-u-md-12 am-form-group">
			      		<div class="am-u-md-3 lablel"><em>*</em>所在部门</div>
			      		<div class="am-u-md-9"><input type="text" class="" placeholder="部门名称" /></div>
			      	</div>
			      	<div class="am-u-md-12 am-form-group">
			      		<div class="am-u-md-3 lablel"><em>*</em>手机号码</div>
			      		<div class="am-u-md-9"><input type="text" class="" placeholder="手机号码" /></div>
			      	</div>
			      	<div class="am-u-md-12 am-form-group">
			      		<div class="am-u-md-3 lablel"><em>*</em>短信验证</div>
			      		<div class="am-u-md-3"><input type="password" class="" placeholder="验证码" /></div>
			      		<div class="am-u-md-6"><button type="button" class="am-btn am-btn-success">获取验证码</button></div>
			      	</div>
					
					<div class="am-u-md-12"><span class="title">公司信息</span></div>

					<div class="am-u-md-12 am-form-group">
			      		<div class="am-u-md-3 lablel"><em>*</em>公司名称</div>
			      		<div class="am-u-md-9"><input type="text" class="" placeholder="公司名称" /></div>
			      	</div>
					<div class="am-u-md-12 am-form-group">
			      		<div class="am-u-md-3 lablel"><em>*</em>所在地</div>
			      		<div class="am-u-md-9"><input type="text" class="" placeholder="请填写具体地址" /></div>
			      	</div>
			      	<div class="am-u-md-12 am-form-group">
			      		<div class="am-u-md-3 lablel"><em>*</em>所处行业</div>
			      		<div class="am-u-md-9">
			      			<select>
						        <option value="option1">选项一</option>
						        <option value="option2">选项二</option>
						        <option value="option3">选项三</option>
						      </select>
			      		</div>
			      	</div>
			      	<div class="am-u-md-12 am-form-group">
			      		<div class="am-u-md-3 lablel"><em>*</em>公司性质</div>
			      		<div class="am-u-md-9">
			      			<select>
						        <option value="option1">民营</option>
						        <option value="option2">私营</option>
						        <option value="option3">国企</option>
						      </select>
			      		</div>
			      	</div>

			      	<div class="am-u-md-12 am-form-group">
			      		<div class="am-u-md-3 lablel"><em>*</em>营业执照</div>
			      		<div class="am-u-md-9">
			      			<div class="am-form-group am-form-file">
							  <button type="button" class="am-btn am-btn-default am-btn-sm">
							    <i class="am-icon-cloud-upload"></i> 上传图片不能大于2M</button>
							  <input type="file" multiple="" />
							</div>
			      		</div>
			      	</div>
			      	<div class="am-u-md-12 am-form-group">
			      		<div class="am-u-md-3 lablel"><em>*</em>验证码</div>
			      		<div class="am-u-md-3"><img src="" style="width:120px; height:43px;" alt="" /></div>
			      		<div class="am-u-md-6"><input type="password" class="" placeholder="输入验证码" /></div>
			      	</div>

			      	<div class="am-u-md-12 am-form-group">
			      		<div class="am-u-md-3 lablel"></div>
			      		<div class="am-u-md-9"><button type="button" class="am-btn am-btn-success">申请企业版</button></div>
			      	</div>
			      </div>
			      <div class="am-u-md-6">请留下您的联系方式，我们会尽快与您沟通用人需求</div>
			</div>
		</div>
	</div>
</div>