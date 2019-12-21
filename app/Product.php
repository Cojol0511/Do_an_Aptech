<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	use Sluggable;
	public function sluggable()
	{
		return [
			'slug'=> [ 
						'source' => 'name'
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
