<?php

use Faker\Generator as Faker;


$factory->define(App\party::class, function (Faker $faker) {
    return [
        'code' => $faker -> word,
        'name' => $faker -> name,
        'type' => function(){
          return partytype::all()->random();
        },
        'gstin' => $faker -> swiftBicNumber,
        'mobileno' => $faker -> e164PhoneNumber,
        'address1' => $faker -> streetName,
        'address2' => $faker -> streetAddress,
        'city' => $faker -> city,
        'enable' => 1
    ];
});
