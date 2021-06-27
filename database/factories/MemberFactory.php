<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Member;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Member::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'role' => $faker->name,
        'active' => true,
    ];
});
