<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\MetaData;
use Faker\Generator as Faker;

$factory->define(MetaData::class, function (Faker $faker) {
    return [
        'product_id'=>$faker->numberBetween(1,1500),
        'user_id'=>$faker->numberBetween(1,500),
        'key'=>$faker->word(),
        'value'=>$faker->sentence(5),
    ];
});
