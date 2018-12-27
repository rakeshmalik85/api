<?php

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    return [

           'name' => $faker->name,
           'catid'=> function(){
             return category::all()->random();
           },
           'unit' => $faker -> word,
           'quantity' => $faker -> randomDigitNotNull,
           'buy_price' => $faker -> randomFloat,
           'sale_price' => $faker -> randomFloat,
           'enable' => 1

    ];
});
