<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\City;
use App\Order;

class Store extends Model
{
  protected $table = 'stores';

  protected $fillable = ['name','address','id_city','available'];

  public function city()
  {
    return $this->belongsTo(City::class, 'id_city');
  }

  public function orders()
  {
    return $this->hasMany(Order::class, 'id_store');
  }

}
