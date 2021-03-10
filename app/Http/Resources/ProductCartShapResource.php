<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductCartShapResource extends JsonResource
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
            'product_id' =>$this->id,
            'product_link' =>$this->permalink,
            'product_name' =>$this->name,
            'product_description' =>$this->description,
            'product_price' =>$this->price,
        ];
    }
}
