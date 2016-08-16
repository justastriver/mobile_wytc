<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Log;
use App\User;
use App\Company;
use Validator;

class RegisterController extends Controller
{
	public function index(Request $request)
	{
		switch ($request->from) {
			case 'user':
				# code...
				return view('mobile.register')->with('index','register')->with('type','user');
				break;
			case 'corp':
				return view('mobile.register')->with('index','register')->with('type','corp');
				break;
			default:
				# code...
				break;
		}
		return view('mobile.register')->with('index','register')->with('type','user');
	}
    //
    public function regist(Request $request) 
    {
    	Log::info($request);
    	
    	$validator = Validator::make($request->all(),
			[
				'name'		=> 'required|between:1,12',
				'phone'		=> 'required|alpha_dash|max:20',
				'email' 	=> 'email|between:4,100',
				'wechat'  => 'required|numeric',
				
			],
			[
				'name.required'			=> '请填写您的称呼',
				'phone.required'		=> '请填写电话',
				'phone.alpha_dash'		=> '电话格式错误',
				'phone.between'			=> '电话格式错误',
				'email.email'			=> '错误的邮箱格式',
				'email.between'			=> '请填写100个字符以内的邮箱',
			]
		);

		if($validator->fails()){
			$message = $validator->messages()->first();
			Log::error("validator: ".$message);
			return view('errors.error')->with('message',$message);
		}
		
		
    	switch ($request->from) {
    		case 'user':
    			# code...
    		{
    			$existUser = User::where('email','=',$request->email)->get();
    			if(empty($existUser) || is_null($existUser) || $existUser->count() == 0)
    			{
	    			$user = new User;
			    	$user->name = $request->name;
			    	$user->email = $request->email;
			    	$user->wechatid = $request->wechat;
			    	$user->phone = $request->phone;
			    	$user->save();
		    	}else {
		    		# code...
		    		Log::info($existUser);
    				return view('errors.503');
    			}
    			break;
		    
    		}
    		case 'corp':
    		{
    			$existCom = Company::where('email','=',$request->email)->get();
    			if(empty($existCom) || is_null($existCom) || $existCom->count() == 0)
    			{
	    			$company = new Company;
	    			$company->email = $request->email;
	    			$company->name = $request->name;
			    	$company->wechatid = $request->wechat;
			    	$company->phone = $request->phone;

			    	$company->save();
		    	}
		    	else {
		    		# code...
		    		Log::info($existCom);
    				return view('errors.503');
    			}
    			break;
    		}
    		default:
    			# code...
    			return view('errors.503');
    			
    	}
    	switch ($request->device) {
    		case 'pc':
    			return view('pc.index')->with('index','home');
    		case 'mobile':
    			return view('mobile.index')->with('index','home');
    		default:
    			return view('pc.index')->with('index','home');
    	}
    	
    }
}
