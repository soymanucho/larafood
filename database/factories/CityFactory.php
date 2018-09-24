<?php

use Faker\Generator as Faker;
use App\City;

$factory->define(App\City::class, function (Faker $faker) {
    return [
      'name'=>$faker->city(),
      'id_province'=>rand(1,20)
    ];
});
