<?php

use Illuminate\Database\Seeder;
use App\Product;
use App\Ingredient;
use App\ProductType;
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
        factory(Product::class, 50)->create();

        $this->attachIngredientsToPizzaProducts();
        $this->attachProductsToPromoProducts();

    }

    public function attachIngredientsToPizzaProducts(){
      //Get all ingredients
      $ingredients = Ingredient::all();

      //get the pizza product type
      $pizzaType = ProductType::where('name','Pizza')->get()->first();

      //Atach up to 4 ingredients to all 'Pizza' products.
      Product::where('id_product_type',$pizzaType->id)->get()->each(function ($product) use ($ingredients) {
        $product->ingredients()->attach(
        $ingredients->random(rand(1, 4))->pluck('id')->toArray()
        );
        });
    }

    protected function attachProductsToPromoProducts(){

      //get the promo product type
      $promoType = ProductType::where('name','Promo')->get()->first();

      //get no Promo roducts
      $noPromoProducts = Product::where('id_product_type','!=',$promoType->id)->get();

      //Atach up to 4 ingredients to all 'Pizza' products.
      Product::where('id_product_type',$promoType->id)->get()->each(function ($product) use ($noPromoProducts) {
        $product->childs()->attach(
        $noPromoProducts->random(rand(2, 4))->pluck('id')->toArray(), ['amount' => rand(1, 3)]
        );
        });
    }
}
