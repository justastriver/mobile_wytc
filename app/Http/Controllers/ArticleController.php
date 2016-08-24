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
    	$article = Articles::where('id','=',$request->id)->first();

    	Log::info('article content: '.$request->id.",,,,".$article);
    	if(is_null($article)) {
    		return view('errors.error')
    				->with('message','页面不存在');
    	}
        $article->view = $article->view + 1;
        $article->save();
    	return view('mobile.article')
    			->with('title','我要跳槽 '.$article->title)
    			->with('article', $article);
    }
}
