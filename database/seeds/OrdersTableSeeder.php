<?php

use Illuminate\Database\Seeder;
use App\Order;
use App\Sellable;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
     {
         //Create 50 random products of all types
         factory(Order::class, 1000)->create();

         $this->attachSellables();
         foreach (Order::all() as $order) {
           $order->save();
         }
    }

    public function attachSellables(){
      //Get all ingredients

      Order::all()->each(function ($order){
        $order->sellables()->attach(
        $order->store->sellables->random(rand(1, 5))->pluck('id')->toArray(),['amount' => rand(1, 10),'price'=>rand(100,450)]

        );
        });
    }

}
