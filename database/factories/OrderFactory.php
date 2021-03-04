<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Order;
use Faker\Generator as Faker;

$factory->define(Order::class, function (Faker $faker) {
    return [
        'cart_id'=>$faker->numberBetween(1,1400),
        'user_id'=>$faker->numberBetween(1,500),
        'status'=>$faker->sentence(2),
    ];
});
