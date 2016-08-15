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
Route::group(['prefix'=>"/"], function () {
	Route::get('/', function () {
	    return view('pc.index')->with('index','home');
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
	    return view('pc.apply')->with('index','apply');
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
Route::group(['prefix'=>"m"], function () {
	Route::get('/', function () {
	    return view('mobile.home')->with('index','home');
	});
	Route::get('hot', function () {
	    return view('mobile.hot')->with('index','hot');
	});
	Route::get('about', function () {
	    return view('mobile.about')->with('index','about');
	});
	Route::get('regist', function () {
	    return view('mobile.register')->with('index','register');
	});
	Route::post('/register','RegisterController@regist');
});
Route::group(array('domain' => 'm.woyaotiaocao.com'), function()
{
	Route::get('/', function()
	{
		return view('mobile.index')->with('index','home');
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
