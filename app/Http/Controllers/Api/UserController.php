<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CartResource;
use App\Http\Resources\FullUserResource;
use App\Http\Resources\UserResource;
use App\Http\Resources\UserWithPaymentResource;
use App\User;
use http\Message;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function show($id)
    {
        return new UserResource(User::find($id));
    }

    public function full_show($id)
    {
        return new FullUserResource(User::find($id));
    }

    public function userpayemnt($id)
    {
        return new UserWithPaymentResource(User::find($id));
    }


    public function register(Request $request)
    {

        Validator::make($request->all(), [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ])->validate();

        $user = new User();
        $user->first_name = $request->input('first_name');
        $user->last_name = $request->input('last_name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->api_token = bin2hex(str::random(30));
        $user->save();
        return new UserResource($user);
    }

    public function login(Request $request)
    {
        Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required',
        ])->validate();
        $email = $request->input('email');
        $cradentials = $request->only('email', 'password');
        if (Auth::attempt($cradentials)) {
            return new UserResource(User::where(['email' => $email])->first());

        }
        $message = [
            'error' => '  login failure ',
            'message' => 'the email or the password is not valid',
        ];
        return Response($message, 401);


    }


}
