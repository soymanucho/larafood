<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Ingredient;

class ProductController extends Controller
{
    public function show()
    {
      $products = Product::orderby('name')->paginate(10);
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
      $ingredients = Ingredient::all();
      $products = Product::all();
      return view('products.newProduct',compact('product','ingredients'));
    }

    public function save(Request $request)
    {
    //  dd($request);
      $this->validate(
        $request,
        [
          'name' => 'required|max:60',
          'description'=> 'required|max:60',
          'price'=> 'required|numeric',
          'ingredients'=> 'required|array',
          'ingredients.*'=> 'required|integer|distinct|exists:ingredients,id',

        ],
        [

        ],
        [
            'name' => 'nombre',
            'description' => 'descripción',
            'price' => 'precio',
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
        return view('products.editProduct',compact('product','ingredients'));
    }

    public function update(Request $request, Product $product)
    {
      $this->validate(
        $request,
        [
          'name' => 'required|max:60',
          'description'=> 'required|max:60',
          'price'=> 'required|numeric',
          'ingredients'=> 'required|array',
          'ingredients.*'=> 'required|integer|distinct|exists:ingredients,id',

        ],
        [

        ],
        [
            'name' => 'nombre',
            'description' => 'descripción',
            'price' => 'precio',
            'ingredients' => 'ingredientes',
        ]
    );
    $product->fill($request->all());
    $product->save();
    $product->ingredients()->sync($request->input('ingredients'));

    return redirect(route('product-show'));
    }
}
