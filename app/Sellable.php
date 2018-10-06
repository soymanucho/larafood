<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;
use App\SellableType;
use App\Order;


class Sellable extends Model
{
  protected $table = 'sellables';
  protected $fillable = ['name','description','id_sellable_type'];

  public function type()
  {
    return $this->belongsTo(SellableType::class,'id_sellable_type');
  }

  public function products()
  {
    return $this->belongsToMany(Product::class, 'sellable_product', 'id_sellable', 'id_product');
  }

  public function orders()
  {
    return $this->belongsToMany(Order::class, 'order_details', 'id_sellable', 'id_order');
  }

}
