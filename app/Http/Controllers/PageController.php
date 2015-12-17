<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller,
	App\Models\Page,
	Illuminate\Support\Facades\View;


class PageController extends Controller {

	/**
	 * Display the specified resource.
	 *
	 * @param  string  $path
	 * @return Response
	 */
	public function show($path)
	{
		//dd($path);
		$page = Page::where('slug', '=', $path)->firstOrFail();

		Return View::make($page->view)->withPage($page);

	}

}
