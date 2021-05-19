<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Event;
use Faker\Generator as Faker;

$factory->define(Event::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'description' => $faker->sentence(5),
        'started_at' => $faker->dateTime(),
        'ended_at' => $faker->dateTime()
    ];
});
