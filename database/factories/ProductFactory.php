<?php

use Faker\Generator as Faker;
use App\Product;
use App\SellableType;

$factory->define(Product::class, function (Faker $faker) {
    $faker->addProvider(new \FakerRestaurant\Provider\en_US\Restaurant($faker));
    $sellableTypes = SellableType::all()->pluck('id')->toArray();
    return [
      'name' => $faker->foodName(),
      'description' => $faker->foodName(),
      'id_product_type'=> $faker->randomElement($sellableTypes),

    ];
});
