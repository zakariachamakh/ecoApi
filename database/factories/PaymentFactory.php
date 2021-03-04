<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Payment;
use Faker\Generator as Faker;

$factory->define(Payment::class, function (Faker $faker) {
    return [
        'order_id'=>$faker->numberBetween(1,1500),
        'user_id'=>$faker->numberBetween(1,500),
        'status'=>$faker->word(),
        'payemnt_refernce'=>$faker->text(),
        'method_title'=>$faker->sentence(),
        'pay_on'=>$faker->date(),
        'amount'=>$faker->numberBetween(),
    ];
});
