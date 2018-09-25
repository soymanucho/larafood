<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function show()
    {
      $products = Product::orderby('id_product_type','name')->orderby('name')->paginate(10);
      return view('products.products',compact('products'));
    }

    public function delete(Product $product)
    {
      $product->delete();
      return redirect('admin/productos');
    }
}
