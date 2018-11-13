<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\SellableType;
use App\Ingredient;

class ProductController extends Controller
{

  public function __construct()
  {
      $this->middleware('auth');
      $this->middleware('onlyRol:3');
  }

  public function show()
  {
    $products = Product::orderby('name')->get();
    return view('products.products',compact('products'));
  }

  public function delete(Product $product)
  {
    $product->delete();
    return redirect('admin/productos');
  }

  public function new()
  {
    $product = new Product();
    $sellableTypes = SellableType::orderby('name')->get();
    $ingredients = Ingredient::orderby('name')->get();
    $products = Product::all();

    return view('products.newProduct',compact('product','ingredients','sellableTypes'));
  }

  public function save(Request $request)
  {
  //  dd($request);
    $this->validate(
      $request,
      [
        'name' => 'required|max:60',
        'description'=> 'required|max:60',
        'id_product_type'=> 'required|numeric',
        'ingredients'=> 'array',
        'ingredients.*'=> 'integer|distinct|exists:ingredients,id',

      ],
      [

      ],
      [
          'name' => 'nombre',
          'description' => 'descripción',
          'id_product_type'=> 'categoría',
          'ingredients' => 'ingredientes',
      ]
  );
  $product = new Product;
  $product->fill($request->all());
  $product->save();
  $product->ingredients()->attach($request->input('ingredients'));

  return redirect(route('product-show'));
  }

  public function edit(Request $request, Product $product)
  {
      $ingredients = Ingredient::all();
      $sellableTypes = SellableType::orderby('name')->get();
      return view('products.editProduct',compact('product','ingredients','sellableTypes'));
  }

  public function update(Request $request, Product $product)
  {
    $this->validate(
      $request,
      [
        'name' => 'required|max:60',
        'description'=> 'required|max:60',
        'id_product_type'=> 'required|numeric',
        'ingredients'=> 'array',
        'ingredients.*'=> 'integer|distinct|exists:ingredients,id',

      ],
      [

      ],
      [
          'name' => 'nombre',
          'description' => 'descripción',
          'id_product_type'=> 'categoría',
          'ingredients' => 'ingredientes',
      ]
  );
  $product->fill($request->all());
  $product->save();
  $product->ingredients()->sync($request->input('ingredients'));

  return redirect(route('product-show'));
  }
}
