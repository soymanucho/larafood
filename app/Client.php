<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Order;

class Client extends Model
{
  protected $table = 'clients';

  protected $fillable = ['name','phone','address','id_user'];

  public function user()
  {
    return $this->belongsTo(User::class, 'id_user');
  }
  public function orders()
  {
    return $this->hasMany(Order::class, 'id_client');
  }

}
