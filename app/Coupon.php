<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    protected $fillable=[
        'code','slug','permalink','amount','discount_type','description',
        'date_expire','usage_count','product_id','user_id','catogery_id','cart_id'
    ];

    public  function  products(){
        return $this->belongsTo(Product::class);
    }
    public  function  user(){
        return $this->belongsTo(User::class);
    }
    public  function  catogery(){
        return $this->belongsTo(Catogery::class);
    }
    public  function  cart(){
        return $this->belongsTo(Cart::class);
    }
}
