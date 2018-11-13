<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Sellable;
use Carbon\Carbon;

class SellableType extends Model
{
  protected $table = 'sellable_types';
  protected $fillable = ['name'];
  public function sellables()
  {
    return $this->hasMany(Sellable::class,'id_sellable_type','id');
  }

  public function fechaF()
  {
    return Carbon::parse($this->created_at)->format('d-m-Y');
  }

}
