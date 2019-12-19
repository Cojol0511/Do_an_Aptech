<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	public function sluggable()
	{
		return [
			'slug'=> [ 
						'source' => 'title'
					]
			];
	}
	public function comment()
	{
    	return $this->hasMany('App\Comment');
	}
	public function brand()
	{
    	return $this->hasOne('App\Brand');
	}
	public function images()
	{
    	return $this->hasMany('App\image');
    }
}
