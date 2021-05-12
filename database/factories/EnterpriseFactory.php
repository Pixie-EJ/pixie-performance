<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Enterprise;
use Faker\Generator as Faker;

$factory->define(Enterprise::class, function (Faker $faker) {
    return [
        'name' => $faker->company,
        'email' => $faker->unique()->safeEmail,
    ];
});
