<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cartalyst\Sentinel\Users\EloquentUser;
use Sentinel;

class Product extends Model
{
   public function users()
    {
        return $this->belongsToMany('App\User', 'user_product');
    }
}
