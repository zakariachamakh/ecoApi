<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable=[

        'name','slug','permalink','description','price','price_sale',
        'stock','stock_status','cart_item_id'
    ];




    public   function  cartitem(){
       return $this->belongsTo(CartItem::class);
    }


    public function tags(){
        return $this->belongsToMany(Tag::class);
    }

    public function catogery(){
        return $this->hasOne(Catogery::class);
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

    public  function productDimension(){
        return $this->hasMany(ProductDimension::class);
    }

    public function  refund(){
        return $this->hasMany(Refund::class);
    }
    public function  review(){
        return $this->hasMany(Review::class);
    }


}
