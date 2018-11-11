<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sellable;
use App\SellableType;
use App\Product;
class SellableController extends Controller
{

  public function __construct()
  {
      $this->middleware('auth');
      $this->middleware('onlyRol:3');
  }

  public function show()
  {
    $sellables = Sellable::orderby('name')->get();
    return view('sellables.sellables',compact('sellables'));
  }

  public function delete(Sellable $sellable)
  {
    $sellable->delete();
    return redirect(route('sellable-delete'));
  }

  public function new()
  {
    $sellable = new Sellable;
    $sellableTypes = SellableType::orderby('name')->get();
    $products = Product::orderby('name')->get();
    return view('sellables.newSellable',compact('sellable','products','sellableTypes'));
  }

  public function save(Request $request)
  {



      $this->validate(
        $request,
        [
          'name' => 'required|max:60',
          'description'=> 'required|max:60',
          'id_sellable_type'=> 'required|numeric',
          'products'=> 'required|array',
          'products.*'=> 'required|integer|distinct|exists:products,id',

        ],
        [

        ],
        [
            'name' => 'nombre',
            'description' => 'descripción',
            'products' => 'productos',
            'id_sellable_type' => 'tipo',
        ]
    );
    $sellable = new Sellable;
    $sellable->fill($request->all());
    $sellable->save();
    foreach($request->input("products") as $product){
      $amount = $request->input("counter_".$product);
      $sellable->products()->attach($product,['amount'=>$amount]);
    }
  //  $sellable->products()->attach($request->input('products'),['amount'=> 1]);

    return redirect(route('sellable-show'));
  }

  public function edit(Request $request, Sellable $sellable)
  {

    $products = Product::orderby('name')->get();
    $sellableTypes = SellableType::orderby('name')->get();
    return view('sellables.editSellable',compact('sellable','products','sellableTypes'));
  }

  public function update(Request $request, Sellable $sellable)
  {
    $this->validate(
      $request,
      [
        'name' => 'required|max:60',
        'description'=> 'required|max:60',
        'id_sellable_type'=> 'required|numeric',
        'products'=> 'required|array',
        'products.*'=> 'required|integer|distinct|exists:products,id',

      ],
      [

      ],
      [
          'name' => 'nombre',
          'description' => 'descripción',
          'products' => 'productos',
          'id_sellable_type' => 'tipo',
      ]
  );
  $sellable->fill($request->all());
  $sellable->save();
  $sellable->products()->sync($request->input('products'),['amount'=> 1]);
    return redirect(route('sellable-show'));
  }
}
