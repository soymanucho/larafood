<?php

use Faker\Generator as Faker;
use App\Order;
use App\Client;
use App\Store;
use App\Status;


$factory->define(App\Order::class, function (Faker $faker) {
  $clients = Client::all()->pluck('id')->toArray();
  $statuses = Status::all()->pluck('id')->toArray();
  $stores = Store::all()->pluck('id')->toArray();
    return [
        'id_client'=>$faker->randomElement($clients),
        'total_price'=>$faker->randomFloat(2,100,800),
        'id_status'=>$faker->randomElement($statuses),
        'id_store'=>$faker->randomElement($stores),
    ];
});
