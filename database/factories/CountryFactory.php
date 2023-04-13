<?php

use App\Models\Country;
use Faker\Generator as Faker;

$factory->define(Country::class, function (Faker $faker) {

    return [
        'country_code' => '+' . $faker->unique()->randomNumber(2),
        'country' => $faker->country,
    ];
});
