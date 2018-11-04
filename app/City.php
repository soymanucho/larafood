<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Province;
use App\Store;
use Carbon\Carbon;

class City extends Model
{
  protected $table = 'cities';

  protected $fillable = ['name','id_province'];

  public function province()
  {
    return $this->belongsTo(Province::class, 'id_province');
  }
  public function stores()
  {
    return $this->hasMany(Store::class, 'stores', 'id_city');
  }

  public function fechaF()
  {
    return Carbon::parse($this->created_at)->format('d-m-Y');
  }

}
