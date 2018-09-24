<?php

use Faker\Generator as Faker;
use App\Store;

$factory->define(Store::class, function (Faker $faker) {
    return [
      'name'=>$faker->name,
      'address'=>$faker->address(),
      'id_city'=>rand(1,20)
    ];
});
