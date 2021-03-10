<?php

namespace App\Http\Controllers\Api;

use App\CartItem;
use App\Http\Controllers\Controller;
use App\Http\Resources\CartItemResource;
use Illuminate\Http\Request;

class CartItemController extends Controller
{
   public  function index(){
       return CartItemResource::collection(CartItem::with(['products'])->paginate());
   }

    public  function show($id){
        return new CartItemResource(CartItem::with(['products'])->find($id));
    }
}
