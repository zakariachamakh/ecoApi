<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CouponResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'coupon_code' =>$this->code,
            'coupon_slug' =>$this->slug,
            'coupon_link' =>$this->permalink,
            'coupon_amount' =>$this->amount,
            'coupon_discount_type' =>$this->discount_type,
            'coupon_date' =>$this->date_expire,
        ];
    }
}
