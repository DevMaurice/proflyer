<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract,
                                    AuthorizableContract,
                                    CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'email', 'password'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    /**
     * Checks if the relation is true
     * 
     * @param Flyer $relation 
     * @return bolean         
     */
    public function owns($relation)
    { 
        return $relation->user_id == $this->id;
    }

    /**
     * A user has many Flyers
     * @return HasMany
     */
    public function flyers()
    { 
        return $this->hasMany('App\Flyer');
    }

    /**
     * Save a flyer 
     * @param  Flyer  $flyer 
     * @return Flyer 
     */
    public function publish(Flyer $flyer)
    { 
        $this->flyers()->save($flyer);
    }
}
