<?php

namespace App;
use Image;
class Thumbnail
{
 	/**
 	 * Make a thumnail for a photo
 	 * 
 	 * @param  [String] $src         
 	 * @param  [String] $destination 
 	 * @return Image            
 	 */
    public function make($src, $destination)
    {
    	Image::make($src)
                ->fit(200)
                ->save($destination);
    }
}
