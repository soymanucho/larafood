<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Ingredient;
class Product extends Model
{
  public function ingredients()
  {


    return $this->belongsToMany(Ingredient::class, 'ingredients_products', 'id_product', 'id_ingredient');
  }

  // public function childs()
  // {
  //   return $this->belongsToMany(Product::class, 'products_products', 'id_product_father', 'id_product_child');
  // }
  //
  // public function fathers()
  // {
  //   return $this->belongsToMany(Product::class, 'products_products', 'id_product_child', 'id_product_father');
  // }
}
