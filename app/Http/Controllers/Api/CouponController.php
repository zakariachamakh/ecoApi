<?php

namespace App\Http\Controllers\Api;

use App\Coupon;
use App\Http\Controllers\Controller;
use App\Http\Resources\CouponResource;
use Illuminate\Http\Request;

class CouponController extends Controller
{
    public  function show($coupon){
        return new CouponResource(Coupon::find($coupon));
    }
}
