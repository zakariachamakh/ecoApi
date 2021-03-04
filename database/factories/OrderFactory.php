<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Order;
use Faker\Generator as Faker;

$factory->define(Order::class, function (Faker $faker) {
    return [
        'order_id'=>$faker->numberBetween(1,1500),
        'user_id'=>$faker->numberBetween(1,1500),
        'status'=>$faker->word(),
    ];
});
