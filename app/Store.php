<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\City;
use App\Order;
use App\Sellable;
use Carbon\Carbon;

class Store extends Model
{
  protected $table = 'stores';

  protected $fillable = ['name','address','id_city','available'];

  public function city()
  {
    return $this->belongsTo(City::class, 'id_city');
  }

  public function orders()
  {
    return $this->hasMany(Order::class, 'id_store');
  }

  public function sellables(){
    return $this->belongsToMany(Sellable::class, 'menu', 'id_store', 'id_sellable')->withPivot('price');;
  }

  public function numberOfOrdersInStatus(Status $status)
  {
    if ($status->is_final) {
      $numberOfOrdersInStatus = $this->orders->where('id_status',$status->id)->where('created_at', '>', Carbon::today()->toDateString())->count();
    }else {
      $numberOfOrdersInStatus = $this->orders->where('id_status',$status->id)->count();
    }
    return $numberOfOrdersInStatus;
  }

  public function totalPriceOfOrdersInStatus(Status $status)
  {
    if ($status->is_final) {
      $totalPrice = $this->orders->where('id_status',$status->id)->where('created_at', '>', Carbon::today()->toDateString())->sum('total_price');
    }else {
      $totalPrice = $this->orders->where('id_status',$status->id)->sum('total_price');
    }
    return number_format($totalPrice,2,',','.');
  }

 public function totalNumberOfActiveOrdersAndFinalizedToday()
 {
   $notFinalStatuses = Status::where('is_final',false)->get()->pluck('id')->toArray();
   $numberNotFinalOrders = $this->orders->whereIn('id_status',$notFinalStatuses)->count();

   $finalStatuses = Status::where('is_final',true)->get()->pluck('id')->toArray();
   $numberFinalOrders = $this->orders->whereIn('id_status',$finalStatuses)->where('created_at', '>', Carbon::today()->toDateString())->count();

   return $numberNotFinalOrders + $numberFinalOrders;
 }

 public function percentageOfOrdersInStatus(Status $status)
 {
   return (number_format($this->numberOfOrdersInStatus($status)*100/$this->totalNumberOfActiveOrdersAndFinalizedToday(),2,'.',','));
 }

 public function fechaF()
 {
   return Carbon::parse($this->created_at)->format('d-m-Y');
 }

}
