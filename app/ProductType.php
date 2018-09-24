<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;

class ProductType extends Model
{
  protected $fillable = ['name'];
  public function product()
  {
    return $this->hasMany(Product::class,'id_product_type','id');
  }
}
