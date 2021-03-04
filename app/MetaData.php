<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MetaData extends Model
{

    protected $fillable=[
        'product_id','user_id','key','value'
    ];

    public  function products(){
        return $this->belongsTo(Product::class);
    }

    public  function user(){
        return $this->belongsTo(User::class);
    }
}
