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
    //
    public function regist(Request $request) 
    {
    	Log::info($request);
    	/*
    	$validator = Validator::make($request->all(),
			[
				'userName'		=> 'required|between:1,12',
				'phoneNum'		=> 'required|alpha_dash|max:20',
				'loginEmail' 	=> 'email|between:4,100',
				'wechatCode'  => 'required|numeric',
				
			],
			[
				'userName.required'			=> json_encode(['1', '需要userName名称']),
				'phoneNum.required'		=> json_encode(['1', '请填写电话']),
				'phone.alpha_dash'		=> json_encode(['1', '电话格式错误']),
				'phone.between'			=> json_encode(['1', '电话格式错误']),
				'loginEmail.email'			=> json_encode(['1', '错误的邮箱格式']),
				'loginEmail.between'			=> json_encode(['1', '请填写100个字符以内的邮箱']),
			]
		);

		if($validator->fails()){
			$message = $validator->messages()->first();
			return json_decode($message)[0];
		}
		*/

    	switch ($request->from) {
    		case 'user':
    			# code...
    		{
    			$existUser = User::where('email','=',$request->loginEmail)->get();
    			if(empty($existUser) || is_null($existUser) || $existUser->count() == 0)
    			{
	    			$user = new User;
			    	$user->name = $request->userName;
			    	$user->email = $request->loginEmail;
			    	if(is_null($request->password)) {
	    				$user->password = "123456";
	    			}else
			    	$user->password = $request->password;
			    	$user->wechatid = $request->wechatCode;
			    	$user->phone = $request->phoneNum;
			    	$user->save();
		    	}else {
		    		# code...
		    		Log::info($existUser);
    				return view('errors.503');
    			}
    			break;
		    
    		}
    		case 'company':
    		{
    			$existCom = Company::where('email','=',$request->loginEmail)->get();
    			if(empty($existCom) || is_null($existCom) || $existCom->count() == 0)
    			{
	    			$company = new Company;
	    			$company->email = $request->loginEmail;
	    			$company->name = $request->userName;
	    			if(is_null($request->password)) {
	    				$company->password = "123456";
	    			}else
	    				$company->password = $request->password;
			    	$company->wechatid = $request->wechatCode;
			    	$company->phone = $request->phoneNum;

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
    	
    	return view('pc.index')->with('index','home');
    }
}
