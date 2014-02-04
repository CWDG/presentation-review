<?php

class PresentationController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$presentations = Presentation::paginate(20);

		return View::make('presentation.index')->with(compact('presentations'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$presentation = new Presentation();
		return View::make('presentation.create')->withPresentation($presentation);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validation = Validator::make(Input::get(), [
			'name' => 'required',
			'slug' => 'required|min:5|unique:presentations',
		]);

		if ($validation->fails()) {
			return Redirect::back()->withInput(Input::get())->withErrors($validation)->withErrorMessage("Couldn't save presentation, please correct and try again.");
		}

		$presentation = new Presentation(Input::get());

		$presentation->save();

		return Redirect::action('PresentationController@index')->withMessage('Saved successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{

	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
