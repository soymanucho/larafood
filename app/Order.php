<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Client;
use App\Status;
use App\Store;
use App\Sellable;

class Order extends Model
{
  protected $table = 'orders';

  protected $fillable = ['id_client','total_price','id_status','id_store'];

  public function client()
  {
    return $this->belongsTo(Client::class, 'id_client');
  }
  public function status()
  {
    return $this->belongsTo(Status::class, 'id_status');
  }
  public function store()
  {
    return $this->belongsTo(Store::class, 'id_store');
  }
  public function sellables()
  {
    return $this->belongsToMany(Sellable::class, 'order_details', 'id_order', 'id_sellable');
  }

  public function calculateTotalPrice()
  {
    $sellables = $this->sellables()->pluck('id_sellable')->toArray();
    $total = $this->store->sellables()->whereIn('id',$sellables)->sum('menu.price');
    $this->total_price=$total;
  }

}
