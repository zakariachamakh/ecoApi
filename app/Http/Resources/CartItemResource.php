<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CartItemResource extends JsonResource
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
            'cart_id'   => $this->cart_id,
            'user_id'   => $this->user_id,
            'total_quantity'   => $this->quantity,
            'products'   => ProductCartShapResource::collection($this->products),
        ];
    }
}
