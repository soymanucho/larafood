<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Rol extends Model
{
  protected $table = 'roles';

  protected $fillable = ['name'];

  public function users()
  {
    return $this->hasMany(User::class, 'users', 'id_rol');
  }
}
