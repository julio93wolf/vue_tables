<?php

use Faker\Generator as Faker;

$factory->define(App\Project::class, function (Faker $faker) {
    return [
        'assigned_by'   => $faker->name,
        'owner'         => $faker->name,
        'name'          => $faker->company,
        'cost'          => $faker->randomNumber(6),
        'description'   => $faker->sentence(100)
    ];
});
