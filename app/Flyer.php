<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flyer extends Model
{

	protected $fillable = [

			'city',
			'street',
			'zip',
			'state',
			'price'
			'country',
			'description'
	];
 	/**
 	 * Returns a Flyer's photo 
 	 * 
 	 * @return App\Photos
 	 */
    public function photos(){

    	return $this->hasMany('App\Photo');
    }
}
