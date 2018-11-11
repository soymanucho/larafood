<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Store;
use App\Sellable;
class MenuController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
      $this->middleware('onlyRol:3');
  }

  public function show(Store $store)
  {

    return view('menu.menu',compact('store'));
  }
  public function delete(Store $store,Sellable $sellable)
  {
    $store->sellables()->detach($sellable->id);
    return redirect('admin/tiendas/'.$store->id.'/menu');
  }

  public function new(Store $store)
  {
    $sellables =Sellable::whereNotIn('id', $store->sellables()->pluck('id')->toArray())->orderby('name')->get();
    $sellable = new Sellable();
    return view('menu.newMenuItem',compact('sellables','sellable','store'));
  }

  public function save(Request $request,Store $store)
  {
    $this->validate(
      $request,
      [
        'price'=> 'required|numeric',
        'sellable'=> 'required|integer|exists:sellables,id',
      ],
      [

      ],
      [
        'price'=> 'precio',
        'sellable'=> 'item',
      ]
  );
  $store->sellables()->attach($request->input('sellable'),['price'=> $request->input('price')]);
    return redirect('admin/tiendas/'.$store->id.'/menu');
  }

  public function edit(Store $store,Sellable $sellable)
  {

    $sellables =Sellable::where('id', $sellable->id)->orderby('name')->get();
    return view('menu.editMenuItem',compact('sellables','sellable','store'));
  }
  public function update(Request $request,Store $store,Sellable $sellable)
  {
    $this->validate(
      $request,
      [
        'price'=> 'required|numeric',
        'sellable'=> 'required|integer|exists:sellables,id',
      ],
      [

      ],
      [
        'price'=> 'precio',
        'sellable'=> 'item',
      ]
  );

  $store->sellables->where('id',$sellable->id)->first()->pivot->price=$request->input('price');
  $store->sellables->where('id',$sellable->id)->first()->pivot->save();
    return redirect('admin/tiendas/'.$store->id.'/menu');
  }


}
