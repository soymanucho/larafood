<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Province;
use App\Store;

class City extends Model
{
  protected $table = 'cities';

  public function province()
  {
    return $this->belongsTo(Province::class, 'id_province');
  }
  public function stores()
  {
    return $this->hasMany(Store::class, 'stores', 'id_city');.
  }

}
