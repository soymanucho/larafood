<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Eloquent\Relations\Pivot;

use App\Client;
use App\Status;
use App\Store;
use App\Sellable;
use Carbon\Carbon;


class Order extends Model
{
  protected $table = 'orders';

  protected $fillable = ['id_client','total_price','id_status','id_store'];

  public function client()
  {
    return $this->belongsTo(Client::class, 'id_client');
  }
  public function status()
  {
    return $this->belongsTo(Status::class, 'id_status');
  }
  public function store()
  {
    return $this->belongsTo(Store::class, 'id_store');
  }
  public function sellables()
  {
    return $this->belongsToMany(Sellable::class, 'order_details', 'id_order', 'id_sellable');
  }

 // protected static function boot()
 // {
   // parent::boot();

   // static::saving(function($order)
   // {
    //  $order->calculateTotalPrice();
    //});

    // Pivot::creating(function($pivot) {
    //   $pivot->amount = $this->calculateTotalPrice();
    // });

//  }

  public function elapsedMinutes()
  {
   return  Carbon::now()->diffInMinutes(Carbon::createFromTimeString($this->created_at));

  }


  public function calculateTotalPrice()
  {
    $sellables = $this->sellables()->pluck('id_sellable')->toArray();
    $total = DB::table('order_details')->where('id_order', $this->id)->sum(DB::raw('(amount * price)'));
    //$total = $this->store->sellables()->whereIn('id',$sellables)->sum('menu.price');
    // $total = $total*$this->pivot->amount;
    $this->total_price=$total;
  }

  public function fechaF()
  {
    return Carbon::parse($this->created_at)->format('d-m-Y');
  }

}
