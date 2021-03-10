<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class FullUserResource extends JsonResource
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
            'first_name'             =>$this->first_name,
            'last_name'              =>$this->last_name,
            'email'                  =>$this->email,
            'phone'                  =>$this->phone,
            'billing_address'        => new AddressResource($this->billingAddress),
            'shipping_address'       => new  AddressResource($this->shippingAddress),
            'api_token'              =>$this->api_token,
        ];
    }
}
