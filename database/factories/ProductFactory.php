<?php

use Faker\Generator as Faker;
use App\Product;
use App\ProductType;
$factory->define(Product::class, function (Faker $faker) {

    $productTypes = ProductType::all()->pluck('id')->toArray();

    return [
      'id_product_type' => $faker->randomElement($productTypes),
      'name' => $faker->sentence($nbWords = 3, $variableNbWords = true),
      'description' => $faker->sentence($nbWords = 8, $variableNbWords = false),
      'price' => $faker->numberBetween($min = 50, $max = 1000),
    ];
});
