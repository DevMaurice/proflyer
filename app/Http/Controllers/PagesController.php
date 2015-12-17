<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use Illuminate\Http\Request;

class PagesController extends Controller
{
	/**
	 * Intialize class and parent constructor.
	 */
    public function __construct()
    {
        parent::__construct();
    }
    /**
     * Returns the route 
     * @return Illuminate\Contracts\View\View.
     */
    public function home()
    {
        return view('pages.home');
    }
}
