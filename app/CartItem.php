<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
   protected $fillable=[
       'user_id','cart_id','quantity'
   ];


   public function user(){

       return $this->belongsTo(User::class);
   }

    public function cart(){

        return $this->belongsTo(Cart::class);
    }

    public  function products(){
       return $this->hasMany(Product::class);
    }
}
