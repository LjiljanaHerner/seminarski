<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Userproduct extends Model
{
	protected $table = 'users';
	public function products()
	{
		return $this->belongsToMany('App\Product');
	}
}
