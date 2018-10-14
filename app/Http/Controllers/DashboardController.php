<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

use Illuminate\Http\Request;
use App\Store;
use App\Order;
use App\Status;


class DashboardController extends Controller
{
    public function show()
    {
      $store = Auth::user()->store;
      $statuses = Status::all();

      $notFinalStatuses = Status::where('is_final',false)->get()->pluck('id')->toArray();
      $numberNotFinalOrders = $store->orders->whereIn('id_status',$notFinalStatuses)->count();


      $finalStatuses = Status::where('is_final',true)->get()->pluck('id')->toArray();
      $numberFinalOrders = $store->orders->whereIn('id_status',$finalStatuses)->where('created_at', '>', Carbon::today()->toDateString())->count();
      $totalNumberOrders = $numberNotFinalOrders + $numberFinalOrders;


      return view('dashboard.dashboard',compact('store','totalNumberOrders','statuses'));
    }
}
