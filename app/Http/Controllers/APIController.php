<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

use App\Store;
use App\Status;
use App\Country;
use App\Sellable;
use App\Order;
use Carbon\Carbon;

class APIController extends Controller
{

  function __construct()
  {
    // $this->middleware('auth:api');
    $this->middleware('permitir.origen');
  }

  public function dashboard()
  {
    $store = Auth::user()->store->with('orders')->with('orders.client')->with('orders.store')->get();
    $statuses = Status::all();


    return [
      'store' => $store,
      'statuses' => $statuses
    ];
  }

  public function countries()
  {
  $paises = Country::with('provinces')->with('provinces.cities')->get();


    return [
      'paises' => $paises
    ];
  }

  public function sellablesChart()
  {
    // $orders = Order::whereDate('created_at',Carbon::today())->get();
    $sellables = DB::table('order_details')
                  ->select('id_sellable', DB::raw('count(id_order) as total'))
                  ->groupBy('id_sellable')->take(5)->get();

    $sellablesName = Sellable::all();

    foreach ($sellables as $id => $count) {
      foreach ($sellablesName as $sell ) {
        if ($sell->id == $id) {
          $sellables[$id]=[$sell->name=>$count];
        }
      }
    }
    
    // $sellables = [];
    // foreach ($orders as $order) {
    //   foreach ($order->sellables as $sellable) {
    //     $sellables[]=$sellable;
    //   }
    // }

    return $sellables;

  }

}
