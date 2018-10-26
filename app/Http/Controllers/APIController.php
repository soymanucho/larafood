<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

use App\Store;
use App\Status;
use App\Country;


class APIController extends Controller
{

  function __construct()
  {
    $this->middleware('auth:api');
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
}
