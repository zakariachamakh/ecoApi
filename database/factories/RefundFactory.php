<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Refund;
use Faker\Generator as Faker;

$factory->define(Refund::class, function (Faker $faker) {
    return [
        'product_id'=>$faker->numberBetween(1,1500),
        'cart_id'=>$faker->numberBetween(1,1500),
        'user_id'=>$faker->numberBetween(1,500),
        'reason'=>$faker->text(),
        'date_refund'=>$faker->date(),
        'amount'=>$faker->numberBetween(),
        'status'=>$faker->randomElements(['accepte','canlce','done','failed']),
        ];
});
