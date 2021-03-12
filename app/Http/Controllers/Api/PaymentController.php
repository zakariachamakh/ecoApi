<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\PaymentResource;
use App\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function show($id)
    {
        return new  PaymentResource(Payment::find($id));

    }
}
