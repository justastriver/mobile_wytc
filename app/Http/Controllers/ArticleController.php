<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Log;
use App\Articles;

class ArticleController extends Controller
{
    //
    public function index(Request $request)
    {
    	$article = Articles::where('id','=',$request->id)->get();
    	Log::info('article content: '.$article);
    	if(is_null($article) || $article->count() == 0) {
    		return view('errors.error')
    				->with('message','页面不存在');
    	}

    	return view('mobile.article')
    			->with('title','内容页面')
    			->with('article', $article[0]);
    }
}
