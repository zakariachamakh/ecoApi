<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'email',
        'phone', 'email_verified', 'phone_verified',
        'password', 'billing_address', 'shipping_address',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public  function roles(){
        return $this->belongsToMany(Role::class);
    }

    public  function billingAddress(){
        return $this->hasMany(Address::class,'id','billing_address');
    }

    public  function shippingAddress(){
        return $this->hasMany(Address::class,'id','shipping_address');
    }

    public function carts(){
        return $this->hasMany(Cart::class);
    }

    public function cartsItem(){
        return $this->hasMany(CartItem::class);
    }

    public function coupons(){
        return $this->hasMany(Coupon::class);
    }

    public  function images(){
        return $this->hasMany(Image::class);
    }

    public function metaData(){
        return $this->hasMany(MetaData::class);
    }

    public  function orders(){
        return $this->hasMany(Order::class);
    }

    public function payments(){
        return $this->hasMany(Payment::class);
    }

    public function  refund(){
        return $this->hasMany(Refund::class);
    }

    public function  review(){
        return $this->hasMany(Review::class);
    }
    public function shipments(){
        return $this->hasMany(Shipment::class);
    }
}
