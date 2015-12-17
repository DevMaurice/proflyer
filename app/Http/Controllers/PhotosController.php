<?php

namespace App\Http\Controllers;

use App\AddPhotoToFlyer;
use App\Flyer;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Http\Requests\CreateFlyerPhotoRequest;
use App\Photo;
use Illuminate\Http\Request;

class PhotosController extends Controller
{
    /**
     * Add photo to a flyer
     * 
     * @param String  $zip     
     * @param String  $street  
     * @param Request $request 
     */
    public function store($zip, $street, CreateFlyerPhotoRequest $request)
    {            
        $file = $request->file('photo');

        $flyer = Flyer::locatedAt($zip, $street);

        (new AddPhotoToFlyer($file, $flyer))->save();
    }

    /**
     * Delete a photo 
     * 
     * @param $id [description]
     * @return View 
     */
    public function destroy($id)
    { 
        $photo = Photo::findorFail($id)->delete();

        return redirect()->back();
    }
}
