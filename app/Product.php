<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Ingredient;
use Carbon\Carbon;

class Product extends Model
{
  protected $fillable = ['name','description','id_product_type'];
  public function ingredients()
  {
    return $this->belongsToMany(Ingredient::class, 'ingredients_products', 'id_product', 'id_ingredient');
  }

  public function sellables()
  {
    return $this->belongsToMany(Sellable::class, 'sellable_product', 'id_product', 'id_sellable');
  }

  public function type()
  {
    return $this->belongsTo(SellableType::class,'id_product_type');
  }

  public function fechaF()
  {
    return Carbon::parse($this->created_at)->format('d-m-Y');
  }

}
