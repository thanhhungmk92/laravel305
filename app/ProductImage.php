<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    protected $fillable = ['productId', 'image'];
    
    public function product()
    {
    	return $this->belongsTo('App\Product','productId','id');
    }
}
