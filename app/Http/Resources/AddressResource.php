<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AddressResource extends JsonResource
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        return [
           'country'    =>$this->country,
           'city'    =>$this->city,
           'state'    =>$this->state,
           'postcode'    =>$this->postcode,
        ];
    }
}
