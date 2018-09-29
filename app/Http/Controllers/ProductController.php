<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\ProductType;
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
      $productTypes = productType::all();
      $ingredients = Ingredient::all();
      $products = Product::all();
      return view('products.newProduct',compact('product','productTypes','ingredients','products'));
    }
}
