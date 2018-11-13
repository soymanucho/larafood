<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Province;
use Carbon\Carbon;

class Country extends Model
{
  protected $table = 'countries';

  protected $fillable = ['name'];

  public function provinces()
  {
    return $this->hasMany(Province::class, 'id_country', 'id');
  }

  public function fechaF()
  {
    return Carbon::parse($this->created_at)->format('d-m-Y');
  }

}
