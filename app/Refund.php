<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class  Refund extends Model
{
    protected $fillable=[
        'product_id','date_refund','cart_id','reason',
        'amount','status','user_id'
    ];

    public function  cart(){
        return $this->belongsTo(Cart::class);
    }
    public function  user(){
        return $this->belongsTo(User::class);
    }

    public function  product(){
        return $this->belongsTo(Product::class);
    }


}
