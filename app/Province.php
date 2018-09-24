<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Country;
use App\City;

class Province extends Model
{
  protected $table = 'provinces';

  public function country()
  {
    return $this->belongsTo(Country::class, 'id_country');
  }
  public function cities()
  {
    return $this->hasMany(City::class, 'cities', 'id_province');.
  }
}
