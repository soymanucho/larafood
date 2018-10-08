<?php

use Faker\Generator as Faker;
use App\SellableType;
use App\Sellable;
$factory->define(Sellable::class, function (Faker $faker) {

  $sellableTypes = SellableType::all()->pluck('id')->toArray();
  return [
    'name' => $faker->foodName(),
    'description' => $faker->foodName(),
    'id_sellable_type' => $faker->randomElement($sellableTypes),
  ];
});
