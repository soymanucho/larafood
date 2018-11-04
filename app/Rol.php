<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use Carbon\Carbon;

class Rol extends Model
{
  protected $table = 'roles';

  protected $fillable = ['name'];

  public function users()
  {
    return $this->hasMany(User::class, 'users', 'id_rol');
  }

  public function fechaF()
  {
    return Carbon::parse($this->created_at)->format('d-m-Y');
  }

}
