<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Log;
use App\User;
use App\Company;
use App\Jobs;

class JobRecomController extends Controller
{
    //
    public function hot(Request $request) 
    {
    	$jobs = Jobs::where('id','>','0')->get();
    	Log::info('jobs: '.$jobs);
    	return view('mobile.jobs')->with('title','最新高端职位信息')->with('jobs', $jobs);
    }
}
