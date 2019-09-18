<?php

use Faker\Generator as Faker;
use App\User;

$factory->define(App\Client::class, function (Faker $faker) {
  return [
    'name'=>$faker->name,
    'phone'=>$faker->tollFreePhoneNumber,
    'address'=>$faker->streetAddress,
    'id_user'=> User::inRandomOrder()->first()

  ];
});
