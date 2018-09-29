<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SellableType;
class SellableTypeController extends Controller
{
    public function show()
    {
      $sellableTypes = SellableType::paginate(10);
      return view('sellableTypes.sellableTypes',compact('sellableTypes'));
    }

    public function delete(ProductType $productType)
    {
      $productType->delete();
      return redirect('admin/tiposDeProducto  ');
    }
    public function new()
    {
      $productType = new ProductType();
      return view('productTypes.newProductType',compact('productType'));
    }

    public function save(Request $request)
    {
      $this->validate(
        $request,
        [
            'name' => 'required|max:60',


        ],
        [

        ],
        [
            'name' => 'nombre',
        ]
    );
    $productType = new ProductType;
    $productType->fill($request->all());
    $productType->save();

    return redirect('/admin/tiposDeProducto/');
    }

    public function edit(ProductType $productType)
    {
      return view('productTypes.editProductType',compact('productType'));
    }
    public function update(ProductType $productType,Request $request)
    {
      $this->validate(
        $request,
        [
            'name' => 'required|max:60',


        ],
        [

        ],
        [
            'name' => 'nombre',
        ]
    );

    $productType->fill($request->all());
    $productType->save();

    return redirect('/admin/tiposDeProducto/');
    }
}
