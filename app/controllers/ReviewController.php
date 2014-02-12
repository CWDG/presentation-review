<?php

class ReviewController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store($presentation_id)
	{
		$validation = Validator::make(Input::get(), [
			'score' => 'required|integer|min:1|max:100',	
		]);

		$presentation = Presentation::find($presentation_id);
		if (empty($presentation)) {
			App::abort(404);
		}
		
		if ($validation->fails()) {
			return Redirect::back()->withErrorMessage('Please try again.')->withErrors($validation)->withInput(Input::get());
		}

		$review = new Review(Input::get());
		$presentation->reviews()->save($review);

		return Redirect::back()->withMessage('Rating added!');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($presentaion_id, $review_id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($presentaion_id, $review_id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($presentaion_id, $review_id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($presentaion_id, $review_id)
	{
		//
	}

}
