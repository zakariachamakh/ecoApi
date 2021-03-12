<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CartResource;
use App\Http\Resources\FullUserResource;
use App\Http\Resources\UserResource;
use App\Http\Resources\UserWithPaymentResource;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public  function show($id){
        return new UserResource(User::find($id));
    }

    public  function full_show($id){
        return new FullUserResource(User::find($id));
    }

    public  function  userpayemnt($id){
        return new UserWithPaymentResource(User::find($id));
    }



    public  function  register(Request  $request){

        Validator::make($request, [
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $user =new User();


    }

}
