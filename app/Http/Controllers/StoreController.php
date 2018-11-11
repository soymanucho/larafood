<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\City;
use App\Country;
use App\Store;

class StoreController extends Controller
{

  public function __construct()
  {
      $this->middleware('auth');
      $this->middleware('onlyRol:3');
  }

  public function show()
  {
    $stores = Store::orderby('name')->with('city')->get();
    return view('stores.stores',compact('stores'));
  }

  public function delete(Store $store)
  {
    $store->delete();
    return redirect('admin/tiendas');
  }

  public function new()
  {
    $store = new Store();

    $countries = Country::orderby('name')->with('provinces')->with('provinces.cities')->get();
    return view('stores.newStore',compact('store','countries'));
  }

  public function save(Request $request)
  {
    $this->validate(
      $request,
      [
          'name' => 'required|max:60',
          'address'=> 'required|max:60',
          'id_city'=>'required|exists:cities,id',


      ],
      [

      ],
      [
          'name' => 'nombre',
      ]
  );
  $store = new Store;
  $store->fill($request->all());
  $store->save();

  return redirect('/admin/tiendas/');
  }

  public function edit(Store $store)
  {
    $countries = Country::orderby('name')->with('provinces')->with('provinces.cities')->get();
    return view('stores.editStore',compact('store','countries'));
  }

   public function update(Store $store, Request $request)
  {
    $this->validate(
      $request,
      [
          'name' => 'required|max:60',
          'address'=> 'required|max:60',
          'id_city'=>'required|exists:cities,id',

      ],
      [

      ],
      [
          'name' => 'nombre',
      ]
  );
  $store->fill($request->all());
  $store->save();

  return redirect('/admin/tiendas/');
  }
}
