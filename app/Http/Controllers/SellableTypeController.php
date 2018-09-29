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

    public function delete(SellableType $sellableType)
    {
      $sellableType->delete();
      return redirect('admin/tiposDeProducto  ');
    }
    public function new()
    {
      $sellableType = new SellableType();
      return view('sellableTypes.newSellableType',compact('sellableType'));
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
    $sellableType = new SellableType;
    $sellableType->fill($request->all());
    $sellableType->save();

    return redirect('/admin/tiposDeProducto/');
    }

    public function edit(SellableType $sellableType)
    {
      return view('sellableTypes.editSellableType',compact('sellableType'));
    }
    public function update(SellableType $sellableType,Request $request)
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

    $sellableType->fill($request->all());
    $sellableType->save();

    return redirect('/admin/tiposDeProducto/');
    }
}
