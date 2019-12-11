<?php

namespace App;
use App\Product;
use Illuminate\Database\Eloquent\Model;

class image extends Model
{
   public function Product()
   {
   		return $this->belongsTo('App\Product');
   }
}
