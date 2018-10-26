<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Province;

class Country extends Model
{
  protected $table = 'countries';

  protected $fillable = ['name'];

  public function provinces()
  {
    return $this->hasMany(Province::class, 'id_country', 'id');
  }
}
