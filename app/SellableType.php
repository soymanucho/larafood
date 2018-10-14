<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Sellable;

class SellableType extends Model
{
  protected $table = 'sellable_types';
  protected $fillable = ['name'];
  public function sellables()
  {
    return $this->hasMany(Sellable::class,'id_sellable_type','id');
  }
}
