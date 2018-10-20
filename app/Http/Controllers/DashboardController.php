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

      return view('dashboard.dashboard',compact('store','statuses'));
    }
}
