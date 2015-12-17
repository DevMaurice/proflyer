<?php

/**
 * Returns a flash instance or info message.
 * 
 * @param   $title   
 * @param   $message 
 * @return  $flash 
 */
 function flash($title = null, $message = null)
 {
     $flash = app('App\Http\Flash');
     if (func_num_args() == 0) {
         return $flash;
     }
     return $flash->info($title, $message);
 }

/**
 * Returns the path to a given flyer
 * 
 * @param  App\Flyer  $flyer 
 * @return String 
 */
function flyer_path(App\Flyer $flyer)		
{
	return $flyer->zip . '/' . str_replace(' ', '-', $flyer->street);
}