<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Catogery extends Model
{
    protected $fillable=[
        'product_id','slug','name'
    ];

    public  function product(){
        return $this->belongsTo(Product::class);
    }

    public function coupons(){
        return $this->hasMany(Coupon::class);
    }
}
