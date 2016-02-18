<?php namespace App\Http\Controllers;

use App\Page;

class PagesController extends Controller {
	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function show($id)
	{
		return view('pages.show')->withPage(Page::find($id));
	}

}
