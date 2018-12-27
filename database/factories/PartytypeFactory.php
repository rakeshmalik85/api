<?php

use Faker\Generator as Faker;

$factory->define(App\partytype::class, function (Faker $faker) {
    return [
        name=> $faker -> name
    ];
});
