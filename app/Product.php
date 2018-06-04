<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	protected $fillable = ['name', 'description'];
	
    public function productImages()
    {
    	 return $this->hasMany('App\ProductImage','productId','id');
    }
}
