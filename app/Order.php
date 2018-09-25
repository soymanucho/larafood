<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Client;
use App\Status;
use App\Store;
use App\OrderDetail;

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
  public function detail()
  {
    return $this->hasMany(OrderDetail::class, 'id_order');
  }
}
