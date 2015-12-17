<?php 

namespace App;

use App\Flyer;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class AddPhotoToFlyer
{	
    protected $file;
    protected $flyer;
    protected $thumbnail;
    /**
     * Intialize all variables needed.
     * 
     * @param UploadedFile   $file      
     * @param Flyer          $flyer     
     * @param Thumbnail|null $thumbnail 
     */
    public function __construct(UploadedFile $file, Flyer $flyer, Thumbnail $thumbnail = null)
    {
        $this->file = $file;

        $this->flyer = $flyer;

        $this->thumbnail = $thumbnail? : new Thumbnail;
    }
    /**
     * Save a given photo Instance.
     * 
     * @return void
     */
    public function save()
    { 
	    $photo = $this->flyer->addPhoto($this->makePhoto());

	    $this->file->move($photo->baseDir(),  $photo->name);

	    $this->thumbnail->make($photo->path,$photo->thumbnail_path);
    }

    /**
     * Make a new Photo Instance
     * 
     * @return App\photo
     */
    protected  function makePhoto()
    { 
    	return new Photo(['name' => $this->fileName()]);
    }

    /**
     * Make a file file name
     * 
     * @return String 
     */
    protected function fileName()
    { 
     	$name = sha1(
            time(). $this->file->getClientOriginalName()
            );
        $extension = $this->file->getClientOriginalExtension();

        return "{$name}.{$extension}";	
    }
}
