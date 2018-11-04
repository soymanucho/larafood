<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;
use Carbon\Carbon;

class Ingredient extends Model
{
  protected $fillable = ['name'];
  public function products()
  {
    return $this->belongsToMany(Product::class, 'ingredients_products', 'id_ingredient', 'id_product');
  }

  public function fechaF()
  {
    return Carbon::parse($this->created_at)->format('d-m-Y');
  }

}
