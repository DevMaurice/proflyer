<?php namespace App\Http\Traits;

use App\Flyer;
use App\Http\Requests;
use Illuminate\Http\Request;

trait AuthorizeUser{
	public function authorizes(Request $request)
	{ 
		if ($request->ajax()) 
		{
			return response(['message' => 'No way'], 403);
		}
		flash('Not Allowed ');
		return redirect('/');
	}

	public function createdFlyer(Request $request)
	{ 
		Flyer::where([
			'street' => $request->street,
			'zip' => $request->zip,
			'user_id' => \Auth::user()->id
			])->exists();
	}
}
