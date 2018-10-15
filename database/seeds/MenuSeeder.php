<?php

use Illuminate\Database\Seeder;
use App\Store;
use App\Sellable;


class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Store::all()->each(function($stores) {
          $stores->sellables()->attach(
            Sellable::all()->random(rand(20, 30))->pluck('id')->toArray(),['price'=>rand(50,500)],['avaliable'=>true]
          );
        });
    }
}
