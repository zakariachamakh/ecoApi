<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
protected $fillable=[
    'product_id','user_id','alt','url'
];

public  function product(){
    return $this->belongsTo(Product::class);
}

    public  function user(){
        return $this->belongsTo(User::class);
    }
}
