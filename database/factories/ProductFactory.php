<?php

use Faker\Generator as Faker;
use App\Product;

$factory->define(Product::class, function (Faker $faker) {
    $faker->addProvider(new \FakerRestaurant\Provider\en_US\Restaurant($faker));

    return [
      'name' => $faker->foodName(),
      'description' => $faker->sentence($nbWords = 8, $variableNbWords = false),
      'price' => $faker->numberBetween($min = 50, $max = 1000),
    ];
});
