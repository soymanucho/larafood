<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


use Illuminate\Http\Request;
use App\Store;
use App\Status;


class DashboardController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }
  public function show()
  {
    $store = Auth::user()->store;
    $statuses = Status::all();

    return view('dashboard.dashboard',compact('store','statuses'));
  }
}
