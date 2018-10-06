<?php

use Faker\Generator as Faker;
use App\SellableType;
use App\Sellable;
$factory->define(Sellable::class, function (Faker $faker) {

  $sellableTypes = SellableType::all()->pluck('id')->toArray();
  return [
    'name' => $faker->sentence($nbWords = 2, $variableNbWords = false),
    'description' => $faker->sentence($nbWords = 8, $variableNbWords = false),
    'id_sellable_type' => $faker->randomElement($sellableTypes),
  ];
});
