<?php

use Illuminate\Database\Seeder;
use App\Product;
use App\Ingredient;
use App\SellableType;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //Create 50 random products of all types
        factory(Product::class, 10)->create();

         $this->attachIngredients();


    }

    public function attachIngredients(){
      //Get all ingredients
      $ingredients = Ingredient::all();

      Product::all()->each(function ($product) use ($ingredients) {
        $product->ingredients()->attach(
        $ingredients->random(rand(1, 5))->pluck('id')->toArray()
        );
        });
    }
}
 a
