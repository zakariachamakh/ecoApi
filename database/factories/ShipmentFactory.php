<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Shipment;
use Faker\Generator as Faker;

$factory->define(Shipment::class, function (Faker $faker) {
    return [
        'order_id'=>$faker->numberBetween(1,1500),
        'user_id'=>$faker->numberBetween(1,500),
        'status'=>$faker->word()
    ];
});
