<?php

namespace App\Http\Resources;

use App\User;
use Illuminate\Http\Resources\Json\JsonResource;

class PaymentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'payment_id' => $this->id,
            'payment_status' => $this->status,
            'payment_order_id' => $this->order_id,
            'payment_status' => $this->status,
            'payment_amount' => $this->amount,
            'payment_date' => $this->pay_on,

        ];
    }
}



