<?php

use	App\Models\Page;

	/*
    |--------------------------------------------------------------------------
    | Application Routes
    |--------------------------------------------------------------------------
    |
    | Here is where you can register all of the routes for an application.
    | It's a breeze. Simply tell Laravel the URIs it should respond to
    | and give it the Closure to execute when that URI is requested.
    |
    */

// Include CSRF protection against all POST, PUT and PATCH requests

Route::group(array('prefix' => 'admin', 'middleware' => 'auth'), function() {

    // ManipulatePageController
    Route::resource('page', 'ManipulatePageController');

    //Route::get('/', 'ManipulatePageController@index')->before('auth');
    Route::get('/', 'ManipulatePageController@index');

});

Route::when('*', 'csrf', ['post', 'put', 'patch']);

// treat / as /home
Route::get('/', ['as' => 'home', function() {

	$page = Page::where('slug', '=', 'home')->firstOrFail();
	return View::make('public.index')->withPage($page);

}]);


// Contact Form
//Route::post('contact', array('uses' => 'ContactFormController@store'));
Route::resource('contact', 'ContactFormController', ['only' => ['store']]);

// Log and Logout
Route::resource('sessions', 'SessionsController', ['only' => ['create', 'store', 'destroy']]);
Route::get('login', ['uses' => 'SessionsController@create'])->before('guest');
Route::get('logout', 'SessionsController@destroy')->before('auth');


// Pages
Route::resource('page', 'PageController', ['only' => ['show']]);
Route::get('{page}', array('uses' => 'PageController@show'));