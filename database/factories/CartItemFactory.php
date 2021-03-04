<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\CartItem;
use Faker\Generator as Faker;

$factory->define(CartItem::class, function (Faker $faker) {
    return [
       'user_id'=>$faker->numberBetween(1,500),
       'cart_id'=>$faker->numberBetween(1,1500),
        'quantity'=>$faker->numberBetween()
    ];
});
