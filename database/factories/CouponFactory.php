<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Coupon;
use Faker\Generator as Faker;

$factory->define(Coupon::class, function (Faker $faker) {
    return [
        'code'=>$faker->word(),
        'slug'=>$faker->slug(),
        'permalink'=>$faker->sentence(5),
        'amount'=>$faker->numberBetween(),
        'discount_type'=>$faker->word(),
        'description'=>$faker->sentence(5),
        'date_expire'=>$faker->date(),
        'usage_count'=>$faker->numberBetween(),
        'product_id'=>$faker->numberBetween(1,1500),
        'user_id'=>$faker->numberBetween(1,500),
        'catogery_id'=>$faker->numberBetween(1,1500),
        'cart_id'=>$faker->numberBetween(1,1500),
    ];
});
