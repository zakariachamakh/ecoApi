<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
       'name'=>$faker->sentence(4),
        'slug'=>$faker->slug(),
        'permalink'=>$faker->url,
        'description'=>$faker->text(),
        'price'=>$faker->numberBetween(),
        'price_sale'=>$faker->numberBetween(),
        'stock'=>$faker->numberBetween(),
        'cart_item_id'=>$faker->numberBetween(1,1500),
        'stock_status'=>$faker->word(),
    ];
});
