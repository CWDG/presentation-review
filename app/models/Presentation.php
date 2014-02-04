<?php

class Presentation extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'presentations';
	
	protected $fillable = ['name', 'slug', 'additional_info'];

	public function reviews() 
	{
		return $this->hasMany('Review');
	}

}
