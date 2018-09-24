<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\City;

class Store extends Model
{
  protected $table = 'stores';

  protected $fillable = ['name','address','id_city','available'];

  public function city()
  {
    return $this->belongsTo(City::class, 'id_city');
  }

}