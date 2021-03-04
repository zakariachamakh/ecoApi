<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable=[
        'order_id','user_id','status','payemnt_refernce','method_title',
        'pay_on','amount'
    ];

    public  function order(){
        return $this->belongsTo(Order::class);
    }

    public  function user(){
        return $this->belongsTo(User::class);
    }
}
