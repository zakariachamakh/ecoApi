<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable=[
        'cart_id','user_id','status'
    ];

    public  function  cart(){
        return $this->belongsTo(Cart::class);
    }
    public  function  user(){
        return $this->belongsTo(User::class);
    }
    public function payments(){
        return $this->hasMany(Payment::class);
    }

    public function shipments(){
        return $this->hasMany(Shipment::class);
    }
}

