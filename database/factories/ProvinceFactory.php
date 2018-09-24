<?php

use Faker\Generator as Faker;
use App\Province;

$factory->define(App\Province::class, function (Faker $faker) {
    return [
        'name'=>$faker->state(),
        'id_country'=>rand(1,20)

    ];
});
