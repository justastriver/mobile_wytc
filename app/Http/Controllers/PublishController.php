<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Jobs;
use App\Company;
use App\User;

use Log;
use Validator;

class PublishController extends Controller
{
    //show view
    public function index(Request $request)
    {
    	return view('mobile.publish')
    			->with('title','发布职位')
    			->with('applytitle','职位发布');
    }
    public function publish(Request $request)
    {
    	Log::info($request);
    	
    	$validator = Validator::make($request->all(),
			[
				'name'		=> 'required|between:1,12',
				'phone'		=> 'required|alpha_dash|max:20',
				'email' 	=> 'email|between:4,100',
				'wechat'  => 'required',
				'corp' => 'required',
				
			],
			[
				'name.required'			=> '请填写您的称呼',
				'phone.required'		=> '请填写电话',
				'phone.alpha_dash'		=> '电话格式错误',
				'phone.between'			=> '电话格式错误',
				'email.email'			=> '错误的邮箱格式',
				'email.between'			=> '请填写100个字符以内的邮箱',
				'corp.required'			=> '请填写公司名称',
			]
		);

		if($validator->fails()){
			$message = $validator->messages()->first();
			Log::error("validator: ".$message);
			return view('errors.error')->with('message',$message);
		}
		
		
    	//insert
		$existUser = User::where('email','=',$request->email)->get();
		if(empty($existUser) || is_null($existUser) || $existUser->count() == 0)
		{
			Log::info("new user to publish job: ".$request->name);
			$user = new User;
	    	$user->name = $request->name;
	    	$user->email = $request->email;
	    	$user->wechat = $request->wechat;
	    	$user->phone = $request->phone;
	    	$user->save();

	    	$job = new Jobs;
	    	$job->title = $request->title;
	    	$job->subtitle = $request->subtitle;
	    	$job->joblevel = $request->joblevel;
	    	$job->salary = $request->salary;
	    	$job->location = $request->location;
	    	$job->education = $request->education;
	    	$job->experience = $request->experience;
	    	$job->badges = $request->badges;
	    	$job->desc = $request->desc;
	    	$job->status = 0;
	    	$job->skills = $request->skills;
	    	$job->save();

    	}else {
    		
    		$job = new Jobs;
	    	$job->title = $request->title;
	    	$job->subtitle = $request->subtitle;
	    	$job->salary = $request->salary;
	    	$job->location = $request->location;
	    	$job->education = $request->education;
	    	$job->experience = $request->experience;
	    	$job->badges = $request->badges;
	    	$job->desc = $request->desc;
	    	$job->skills = $request->skills;
	    	$job->status = 0;
	    	$job->save();

    		Log::info("exist user to publish job: ".$existUser);
    		/*
			return view('errors.error')
					->with('message', '该邮箱已经被注册过');
			*/		
		}
		return view('dialog.succ')->with('message','发布成功，等待审核(1小时内)，审核通过后职位信息将直接发布到官方首页！');
    }
}
