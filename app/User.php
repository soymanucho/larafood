<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Rol;
use App\Client;
use Carbon\Carbon;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','id_store','api_token'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function rol()
    {
      return $this->belongsTo(Rol::class, 'id_rol');
    }
    public function client()
    {
      return $this->hasOne(Client::class, 'id_user');
    }
    public function store()
    {
      return $this->belongsTo(Store::class, 'id_store');
    }

    public function fechaF()
    {
      return Carbon::parse($this->created_at)->format('d-m-Y');
    }

}
