<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Address;
use Faker\Generator as Faker;

$factory->define(Address::class, function (Faker $faker) {
    return [
        'user_id'=>$faker->numberBetween(1,500),
        'country'=>$faker->country,
        'city'=>$faker->city,
        'state'=>$faker->state,
        'postcode'=>$faker->postcode,
    ];
});
