<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Country;
use App\City;
use Carbon\Carbon;

class Province extends Model
{
  protected $table = 'provinces';

  protected $fillable = ['name','id_country'];

  public function country()
  {
    return $this->belongsTo(Country::class, 'id_country');
  }
  public function cities()
  {
    return $this->hasMany(City::class, 'id_province', 'id');
  }

  public function fechaF()
  {
    return Carbon::parse($this->created_at)->format('d-m-Y');
  }

}
