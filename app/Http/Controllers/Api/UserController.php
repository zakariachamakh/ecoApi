<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CartResource;
use App\Http\Resources\FullUserResource;
use App\Http\Resources\UserResource;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public  function show($id){
        return new UserResource(User::find($id));
    }

    public  function full_show($id){
        return new FullUserResource(User::find($id));
    }

}
