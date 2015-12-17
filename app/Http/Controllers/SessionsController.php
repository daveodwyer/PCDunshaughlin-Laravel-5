<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller,
	App\Page as Page,
	Input,
	Auth,
	Redirect,
	Illuminate\Support\Facades\View;

class SessionsController extends Controller {


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('sessions.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		
		$attempt = Auth::attempt(array(
			'email' => $input['user'],
			'password' => $input['password']
		));

		if($attempt) {
			return Redirect::action('ManipulatePageController@index');
		}  else {
			return Redirect::back()->withError('Incorrect. Please try again');
		}

	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy()
	{
		Auth::logout();

		return Redirect::home();
	}


}
