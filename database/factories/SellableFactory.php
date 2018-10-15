<?php

use Faker\Generator as Faker;
use App\SellableType;
use App\Sellable;
$factory->define(Sellable::class, function (Faker $faker) {

  $sellableTypes = SellableType::all()->pluck('id')->toArray();
  return [
    'name' => $faker->sentence(3, true),
    'description' => $faker->sentence(10, false),
    'id_sellable_type' => $faker->randomElement($sellableTypes),
  ];
});
