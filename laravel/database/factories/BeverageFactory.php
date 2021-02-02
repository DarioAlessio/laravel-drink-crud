<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Beverage;
use Faker\Generator as Faker;

$factory->define(Beverage::class, function (Faker $faker) {
    return [
        'name'=> $faker ->company(),
        'gradation'=> rand(0,20),
        'price'=> rand(0,50),
    ];
});
