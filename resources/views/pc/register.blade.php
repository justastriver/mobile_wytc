<!--注册页面-->
<div class="wid1200 padtop50 clearfix regbox">
    <div class="am-tabs" data-am-tabs="{noSwipe: 1}" id="doc-tab-demo-1">
        <ul class="am-tabs-nav am-nav am-nav-tabs">
            <li class="am-active"><a href="javascript: void(0)">个人用户</a></li>
            <li><a href="javascript: void(0)">企业用户</a></li>
        </ul>
        <div class="am-tabs-bd">
            <div class="am-tab-panel am-active">
                <form method="post" class="am-form" data-am-validator="true" action="/register">
                    <div class="am-g">
                        <div class="am-u-sm-12 am-u-md-12 am-form-group">
                            <div class="am-u-sm-12 am-u-md-3 lablel"><em>*</em>邮箱</div>
                            <div class="am-u-sm-12 am-u-md-9">
                                <input type="email" class="" placeholder="邮箱地址" required="required" name="email" />
                            </div>
                        </div>
                        <div class="am-u-sm-12 am-u-md-12 am-form-group">
                            <div class="am-u-md-3 lablel"><em>*</em>昵称</div>
                            <div class="am-u-md-9">
                                <input type="text" class="" placeholder="昵称" required="required" name="name" />
                            </div>
                        </div>
                        
                        <div class="am-u-md-12 am-form-group">
                            <div class="am-u-md-3 lablel"><em>*</em>手机号码</div>
                            <div class="am-u-md-9">
                                <input type="text" class="" placeholder="输入手机号码" required="required" name="phone" />
                            </div>
                        </div>
                        <div class="am-u-md-12 am-form-group">
                            <div class="am-u-md-3 lablel"><em>*</em>微信号码</div>
                            <div class="am-u-md-9">
                                <input type="text" class="" placeholder="输入微信号码" required="required" name="wechat" />
                            </div>
                        </div>
                        <div class="am-u-md-12 am-form-group">
                            <div class="am-u-md-3 lablel">
                                <input type="hidden" id="userType" value="0" />
                                <input type="hidden" id="userType" name="from" value="user" />
                                <input type="hidden" id="userType" name="device" value="pc" />
                            </div>
                            <div class="am-u-md-9">
                                <button id="submit" class="am-btn am-btn-success">申请职位</button>
                            </div>
                        </div>
                    
                    </div>
                </form>
                <div class="am-u-md-6">请留下您的联系方式，我们会尽快与您沟通用人需求</div>
            </div>
            <div class="am-tab-panel">
                <form method="post" class="am-form" data-am-validator="true" action="/register?from=corp&device=pc">
                    <div class="am-u-md-6 am-form">
                        <div class="am-u-md-12"><span class="title">账号信息</span></div>
                        <div class="am-u-md-12 am-form-group">
                            <div class="am-u-md-3 lablel"><em>*</em>邮箱</div>
                            <div class="am-u-md-9">
                                <input type="email" class="" placeholder="邮箱地址" equired="required" name="email" />
                            </div>
                        </div>
                        
                        <div class="am-u-md-12"><span class="title">联系人信息</span></div>
                        <div class="am-u-md-12 am-form-group">
                            <div class="am-u-md-3 lablel"><em>*</em>联系人</div>
                            <div class="am-u-md-9">
                                <input type="text" class="" placeholder="联系人名称" equired="required" name="name" />
                            </div>
                        </div>
                        <div class="am-u-md-12 am-form-group">
                            <div class="am-u-md-3 lablel"><em>*</em>所在部门</div>
                            <div class="am-u-md-9">
                                <input type="text" class="" placeholder="部门名称" name="partment" />
                            </div>
                        </div>
                        <div class="am-u-md-12 am-form-group">
                            <div class="am-u-md-3 lablel"><em>*</em>手机号码</div>
                            <div class="am-u-md-9">
                                <input type="text" class="" placeholder="手机号码" equired="required" name="phone" />
                            </div>
                        </div>
                        <div class="am-u-md-12 am-form-group">
                            <div class="am-u-md-3 lablel"><em>*</em>微信号码</div>
                            <div class="am-u-md-9">
                                <input type="text" class="" placeholder="输入微信号码" required="required" name="wechat" />
                            </div>
                        </div>
                        <div class="am-u-md-12"><span class="title">公司信息</span></div>
                        <div class="am-u-md-12 am-form-group">
                            <div class="am-u-md-3 lablel"><em>*</em>公司名称</div>
                            <div class="am-u-md-9">
                                <input type="text" class="" placeholder="公司名称" equired="required" name="company" />
                            </div>
                        </div>
                        <div class="am-u-md-12 am-form-group">
                            <div class="am-u-md-3 lablel"><em>*</em>所在地</div>
                            <div class="am-u-md-9">
                                <input type="text" class="" placeholder="请填写具体地址" equired="required" name="location" />
                            </div>
                        </div>
                        <div class="am-u-md-12 am-form-group">
                            <div class="am-u-md-3 lablel"><em>*</em>所处行业</div>
                            <div class="am-u-md-9">
                                <select>
                                    <option value="option1">IT/互联网</option>
                                    <option value="option2">通信</option>
                                    <option value="option3">其他</option>
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
                            <div class="am-u-md-3 lablel">
                                <input type="hidden" id="userType" value="0" />
                                <input type="hidden" id="userType" name="from" value="corp" />
                                <input type="hidden" id="userType" name="device" value="pc" />
                            </div>
                            <div class="am-u-md-9">
                                <button id="submit" class="am-btn am-btn-success">申请入驻</button>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="am-u-md-6">请留下您的联系方式，我们会尽快与您沟通用人需求</div>
            </div>
        </div>
    </div>
</div>
