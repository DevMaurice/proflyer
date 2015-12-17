<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{

    protected $table = 'flyer_photos';
    /**
     * Shows the fillable fields. (Mass assignable)
     * 
     * @var Array.
     */
    protected $fillable = ['path', 'name', 'thumbnail_path'];
 
    /**
     * A photo is owned by a flyer
     * 
     * @return App\Flyer
     */
    public function flyer()
    {
        return $this->belongsTo('App\Flyer');
    }

    /**
     * Set the name attribute.
     * 
     * @param String $name 
     */
    public function setNameAttribute($name)
    {
        $this->attributes['name'] = $name;

        $this->path = $this->baseDir(). '/'. $name;

        $this->thumbnail_path = $this->baseDir(). '/tn-'. $name;
    }

    /**
     * Returns the upload base directory.
     *  
     * @return [type] [description]
     */
    public function baseDir()
    {
        return 'flyers/photos';
    }

    /**
     * Delete the files in directory and database entry
     * 
     * @return [type] [description]
     */
    public function delete()
    { 
        \File::delete([
            $this->path,
            $this->thumbnail_path
            ]);
        parent::delete();
    }
}
