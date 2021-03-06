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
	<section>
	  @if($jobs->count() == 0) 
	  <div class="am-u-sm-12">
		  <div class="am-panel am-panel-success">
		    <div class="am-panel-bd" style="float:center">
		    	<span>暂时没有合适的职位信息！</span>
		    	
			</div>
			</div>
		</div>
	  	
	  @endif
	  @foreach($jobs as $job)
	   @if($job->status == 1)
	  <div class="am-u-sm-12">
		  <div class="am-panel am-panel-success">
		    <div class="am-panel-bd">
		    	<span>{{$job->title}}</span>
		    	<div style="float:right">
			    	<i class="am-icon-eye am-icon-fw" ></i>
				    <span >{{$job->view}}</span>
			    </div>
		    	<div class="am-list-news-bd">
		            <ul class="am-list">
		                <!--缩略图在标题右边-->
		                <li class="am-g am-list-item-desced am-list-item-thumbed am-list-item-thumb-right pet_hd_list">
		                  <a href="apply?type=user&jobid={{$job->id}}&title={{$job->title}}" class="pet_hd_block">
		                    <div class="pet_hd_block_title">
		                    	<i class="am-icon-home am-icon-fw"></i>	
		                    	<span>{{$job->subtitle}}</span>
		                    </div>
		                    <div class="pet_hd_block_map">
			                    <i class="am-icon-map-marker am-icon-fw"></i>
			                    <span>{{$job->location}}</span>
		                    </div>
		                    <div class="pet_hd_block_tag">
		                    	<i class="am-icon-calendar am-icon-fw"></i>
		                    	<span>{{$job->created_at}}</span>
		                    </div>
		                    <div class="pet_hd_block_tag">
		                    	<i class="am-icon-cc-visa am-icon-fw" ></i>
		                    	<span>{{$job->salary}}</span>
		                    </div>
		                    <div class="pet_hd_block_tag">
		                    	<i class="am-icon-graduation-cap am-icon-fw"></i>
		                    	<span>{{$job->education}}</span>
		                    </div>
		                    <div class="pet_hd_block_tag">
		                    	<i class="am-icon-user am-icon-fw"></i>
		                    	<span>{{$job->experience}}</span>
		                    </div>
		                    <div class="pet_hd_block_tag">
			                    <i class="am-icon-circle-o-notch am-icon-spin"></i>
			                    <span>{{$job->skills}}</span>
		                    </div>
		                    <div class="pet_hd_block_tag">
		                    	<i class="am-icon-user am-icon-fw"></i>
		                    	<span>{{$job->desc}}</span>
		                    </div>
		                    <div class="pet_hd_block_tag">	
			                    	<i class="am-icon-star am-icon-fw" style="color:red"></i>
			                    	<i class="am-icon-star am-icon-fw" style="color:red"></i>
			                    	<i class="am-icon-star am-icon-fw" style="color:red"></i>
			                    	<i class="am-icon-star-half-o am-icon-fw" style="color:red"></i>
			                    	<i class="am-icon-star-o am-icon-fw" style="color:red"></i> 	
		                    </div>
		                    <div class="pet_hd_block_tag">
		                    	@foreach(explode(' ',$job->badges) as $badge)
		                    		<span class="am-badge am-badge-warning am-round">{{$badge}}</span> 
		                    	@endforeach
		                    </div>
		                    <div class="pet_hd_block_tag am-u-sm-centor">
								
		                    	<span class="am-icon-info-circle">点击任意区域立即应聘</span>
		                    	
		                    </div>
		                  </a>
		                </li>
		                
		            </ul>
		        </div>
		    </div>
		  </div>
		  
	  </div>
	  @endif
	  @endforeach

  </section>
  <section>

  	 <div class="am-g">
		<div class="am-u-sm-12">
		  		<span>没有你喜欢的职位？赶快点击此处&nbsp;<a class="am-btn am-btn-danger" href="apply?type=user">智能推荐</a>&nbsp;提交你的信息吧</span>
		</div>
		
		<div class="am-u-sm-12">
			<p></p>
			<br>
			<span></span>
		</div>
	</div>
	
  </section>
</body>
@include('mobile.footer')
</html>