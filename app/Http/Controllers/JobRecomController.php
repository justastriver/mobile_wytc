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
    	$jobs = Jobs::limit(10)->orderBy('created_at', 'desc')->get();
    	foreach ($jobs as $job) {
    		$job->view = $job->view + 1;
    		$job->save();
    	}
    	Log::info('jobs: '.$jobs);
    	return view('mobile.jobs')->with('title','最新高端职位')->with('jobs', $jobs);
    }
}
