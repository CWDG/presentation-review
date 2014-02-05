<?php

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

Route::resource('presentation', 'PresentationController');

Route::get('/p/{slug}', function($slug) {
	$presentation = Presentation::whereSlug($slug)->first();

	if ($presentation) {
		return Redirect::action('PresentationController@show', [$presentation->id]);
	}

	App::abort(404);
});

Route::get('/', function()
{
	return View::make('index');
});
