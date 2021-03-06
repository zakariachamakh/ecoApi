<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Review;
use Faker\Generator as Faker;

$factory->define(Review::class, function (Faker $faker) {
    return [
        'product_id'=>$faker->numberBetween(1,1500),
        'user_id'=>$faker->numberBetween(1,500),
        'content'=>$faker->text(),
        'rating'=>$faker->numberBetween(1,5),
    ];
});
