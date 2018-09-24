<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;
class Ingredient extends Model
{
  protected $fillable = ['name'];
  public function products()
  {
    return $this->belongsToMany(Product::class, 'ingredients_products', 'id_ingredient', 'id_product');

  }
}
