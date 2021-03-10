<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductDimensionResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return
            [
            'product_width'     =>$this->width,
            'product_lenght'     =>$this->lenght,
            'product_height'     =>$this->height,
        ];
    }
}
