<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
//pc for router

Route::group(array('domain' => 'www.woyaotiaocao.com'), function() {
	Route::get('/', function () {
	    return view('pc.corps')->with('index','corps');
	});
	Route::get('/home', function () {
	    return view('pc.index')->with('index','home');
	});
	Route::get('/hotjobs', function () {
	    return view('pc.hotjobs')->with('index','hotjobs');
	});
	Route::get('/corps', function () {
	    return view('pc.corps')->with('index','corps');
	});
	Route::get('/apply', function () {
	    return view('pc.apply')->with('index','apply')->with('type','mobile');
	});
	Route::get('/help', function () {
	    return view('pc.help')->with('index','help');
	});
	Route::get('/contact', function () {
	    return view('pc.contact')->with('index','contact');
	});
	Route::get('/follow', function () {
	    return view('pc.follow')->with('index','follow');
	});
	Route::get('/publish', function () {
	    return view('pc.publish')->with('index','publish');
	});
	
	Route::post('/register','RegisterController@regist');

});

//mobile
Route::group(['domains' => [['m.woyaotiaocao.com'],['localhost']]], function()
{
	Route::get('/', 'HomeController@index');
	Route::get('home', 'HomeController@index');
	Route::get('/', 'HomeController@index');
	
	Route::get('article', 'ArticleController@index');
	
	Route::get('profile', function () {
	    return view('mobile.home')->with('title','首页');
	});
	Route::get('publish', 'PublishController@index');
	Route::post('publish', 'PublishController@publish');
	
	Route::get('about', function () {
	    return view('mobile.about')->with('title','关于');
	});
	
	Route::get('jobs', 'JobRecomController@hot');
	
	Route::get('/apply','ApplyController@index');

	Route::get('contact', function() {
		return view('mobile.contact')->with('title', '联系我们');
	});
	Route::get('rss', function() {
		return view('mobile.rss')->with('title', '订阅内容');
	});
	Route::get('doc', function() {
		return view('mobile.doc')->with('title', '使用手册');
	});
	Route::get('user/{id}', function($id)
	{
		
	});
});
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
