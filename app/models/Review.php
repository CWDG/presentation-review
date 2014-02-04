<?php

class Review extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'reviews';
	
	protected $fillable = ['score'];

	public function presentation() 
	{
		return $this->belongsTo('Presentation');
	}

	public function comments() 
	{
		return $this->hasMany('Comment');
	}

}
