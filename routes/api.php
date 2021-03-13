<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Catogeries
Route::get('/catogeries', 'Api\CatogeryController@index');
Route::get('/catogeries/{catogery}', 'Api\CatogeryController@show');

//Tags
Route::get('/tags', 'Api\TagController@index');
Route::get('/tags/{tag}', 'Api\TagController@show');
//Product
Route::get('/products', 'Api\ProductController@index');
Route::get('/products/{product}', 'Api\ProductController@show');


//get user by id
Route::get('/user/{id}', 'Api\UserController@show');
Route::get('/full-user/{id}', 'Api\UserController@full_show');
Route::get('/user-payment/{id}', 'Api\UserController@userpayemnt');
Route::post('/auth/register', 'Api\UserController@register');
Route::post('/auth/login', 'Api\UserController@login');
Route::get('/coupons/{coupon}', 'Api\CouponController@show');
Route::get('/cart-item/{id}', 'Api\CartitemController@show');
Route::get('/cart-item/{id}', 'Api\CartitemController@show');

//get endpoint Test
Route::get('/cart-item', 'Api\CartitemController@index');

//get payment by id
Route::get('/payment/{id}', 'Api\PaymentController@show');


//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});
