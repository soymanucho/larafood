<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;

class ProductType extends Model
{
  public function product()
  {
    return $this->hasMany(Product::class,'id_property_type','id');
  }
}
