<?php

namespace App;

use App\image;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	public function image ()
	{
    	return $this->hasMany('App\image');
    }
}
