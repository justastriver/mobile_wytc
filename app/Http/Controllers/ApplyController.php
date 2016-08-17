<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ApplyController extends Controller
{
    //
    public function index(Request $request)
    {
    	$title = "填写基本信息，我们会尽快跟您联系";
		if(!is_null($request->title)) {
    		$title = $request->title;
    	}		
    	switch ($request->type) {
    		case 'user':
    			# code...
    			return view('mobile.apply')
    					->with('title','填写申请材料')
    					->with('type','user')
    					->with('applytitle',"应聘:".$title);
    			break;
    		case 'corp':
    			return view('mobile.apply')
    					->with('title','企业入驻')
    					->with('type','corp')
    					->with('applytitle',$title);
    			break;
    		default:
    			# code...
    			return view('mobile.apply')
    					->with('title','企业入驻')
    					->with('type','corp')
    					->with('applytitle',$title);
    			break;
    	}
    	
    	
    }
}
