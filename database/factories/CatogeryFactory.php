<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Catogery;
use Faker\Generator as Faker;

$factory->define(Catogery::class, function (Faker $faker) {
    return [
        'product_id'=>$faker->unique()->numberBetween(1,1500),
        'slug'=>$faker->slug(),
        'name'=>$faker->word()
    ];
});
