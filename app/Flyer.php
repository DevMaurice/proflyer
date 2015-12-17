<?php

namespace App;

use App\Photo;
use Illuminate\Database\Eloquent\Model;

class Flyer extends Model
{
    /**
     * Mass assignable fields
     * 
     * @var Array
     */
    protected $fillable = [
            'city',
            'user_id',
            'street',
            'zip',
            'state',
            'price',
            'country',
            'description'
    ];

    /**
     * Returns a Flyer's photo 
     * 
     * @return App\Photos
     */
    public function photos()
    {
        return $this->hasMany('App\Photo');
    }

    /**
     * Flyer located at zip and this address
     * 
     * @param  String $zip    [description]
     * @param  String $street [description]
     * @return Illuminate\Database\Eloquent\Builder    
     */
    public static function locatedAt($zip, $street)
    {
        $street=str_replace('-', ' ', $street);
        
        return static::where(compact('zip', 'street'))->firstorFail();
    }

    /**
     * Formats the price amounts.
     * 
     * @param  $price [description] 
     * @return $price Formatted price.
   */
    public function getPriceAttribute($price)
    {
        return 'Kshs ' . number_format($price);
    }

    /**
     * Add a photo instance
     * 
     * @param Photo $photo 
     */
    public function addPhoto(Photo $photo)
    {
        return $this->photos()->save($photo);
    }

    /**
     * A flyer is owned by a  User
     * 
     * @return Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function owner()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    /**
     * Determine if a user own this flyer
     * 
     * @param User $user
     * @return bolean
     */
    public function ownedBy(User $user)
    {
        return $this->user_id == $user->id;
    }
}
