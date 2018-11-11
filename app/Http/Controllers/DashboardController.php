<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

use Illuminate\Http\Request;
use App\Store;
use App\Status;
use App\Client;
use App\Order;
use App\Sellable;


class DashboardController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
      $this->middleware('onlyRol:3');
  }
  public function show()
  {
    $store = Auth::user()->store;
    $statuses = Status::all();
    $clients = Client::orderBy('id','desc')->take(8)->get();
    $todayClients = Client::whereDate('created_at', Carbon::today())->get();
    $lastOrders = Order::orderBy('id','desc')->where('id_store',Auth::user()->store->id)->take(8)->get();
    $lastSellables = Sellable::orderBy('id','desc')->take(4)->get();
    return view('dashboard.dashboard',compact('store','statuses','clients','todayClients','lastOrders','lastSellables'));
  }
}
