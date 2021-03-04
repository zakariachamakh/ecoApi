<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\ProductDimension;
use Faker\Generator as Faker;

$factory->define(ProductDimension::class, function (Faker $faker) {
    return [
        'product_id'=>$faker->numberBetween(1,1500),
        'width'=>$faker->word(),
        'length'=>$faker->word(),
        'height'=>$faker->word(),
    ];
});
