<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Cartalyst\Sentinel\Users\EloquentUser;
use App;
use Illuminate\Database\Eloquent\Model;

class User extends EloquentUser
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email',
        'password',
        'last_name',
        'first_name',
        'permissions',
		'adress',
		'mob_tel'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
	
	public static function byEmail($email)
	{
		return static::whereEmail($email)->first();
	}
	public function products()
	{
		return $this->belongsToMany('App\Product', 'user_product')->withPivot('kolicina');
	}
	
}
