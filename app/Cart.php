<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable=[
        'user_id','total'
    ];


    public function user(){
        return $this->belongsTo(User::class);
    }

    public function cartItem(){
        return $this->hasMany(CartItem::class);
    }

    public function coupons(){
        return $this->hasMany(Coupon::class);
    }

    public function  refund(){
        return $this->hasMany(Refund::class);
    }


}
