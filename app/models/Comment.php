<?php

class Comment extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'comments';
	
	protected $fillable = ['comment'];

	public function review() 
	{
		return $this->belongsTo('Review');
	}

}
