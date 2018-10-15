<?php

use Illuminate\Database\Seeder;
use App\Sellable;
use App\Product;
class SellableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      factory(Sellable::class, 30)->create();

       $this->attachProducts();
    }

    public function attachProducts(){
      //Get all ingredients
      $products = Product::all();

      Sellable::all()->each(function ($sellable) use ($products) {
        $sellable->products()->attach(
        $products->random(rand(1, 2))->pluck('id')->toArray(),['amount' => rand(1, 10)]
        );
        });
    }
}
