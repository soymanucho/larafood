<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\ProductType;
use App\Ingredient;
class Product extends Model
{
    public function productTypes()
  {
    return $this->belongsTo(ProductType::class,'id_product_type');
  }

  public function ingredients()
  {
    return $this->belongsToMany(Ingredient::class, 'ingredients_products', 'id_product', 'id_ingredient');
  }

  public function products()
  {
    return $this->belongsToMany(Product::class, 'products_products', 'id_product_father', 'id_product_child');
  }
}
