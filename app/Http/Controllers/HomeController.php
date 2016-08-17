<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Articles;
use Log;

class HomeController extends Controller
{
    //
    public function index()
    {
    	$articles = Articles::where('id','>','0')->get();
    	Log::info('articles of home: '.$articles);
    	return view('mobile.home')
    			->with('title','首页')
    			->with('articles',$articles);
    }
}
