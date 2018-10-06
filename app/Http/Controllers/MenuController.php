<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Store;
use App\Sellable;
class MenuController extends Controller
{
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
}
