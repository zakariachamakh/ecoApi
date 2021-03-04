<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductDimension extends Model
{
    protected $fillable=[
        'product_id','width','length','height'
    ];

    public  function product(){
        return $this->belongsTo(Product::class);
    }
}
