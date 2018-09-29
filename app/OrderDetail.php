<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Order;
use App\Product;

class OrderDetail extends Model
{
  protected $table = 'order_details';

  protected $fillable = ['id_product','id_order','amount','price'];

  public function order()
  {
    return $this->belongsTo(Order::class, 'id_order');
  }
  public function product()
  {
    return $this->belongsTo(Product::class, 'id_product');
  }

}
