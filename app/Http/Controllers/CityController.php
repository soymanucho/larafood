<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\City;
use App\Province;

class CityController extends Controller
{
  public function show()
  {
    $cities = City::orderby('name')->with('province')->get();
    return view('cities.cities',compact('cities'));
  }

  public function delete(City $city)
  {
    $city->delete();
    return redirect('admin/ciudades');
  }

  public function new()
  {
    $city = new City();
    $provinces = Province::orderby('name')->get();
    return view('cities.newCity',compact('city','provinces'));
  }

  public function save(Request $request)
  {
    $this->validate(
      $request,
      [
          'name' => 'required|max:60',
          'id_province'=>'required|exists:provinces,id',


      ],
      [

      ],
      [
          'name' => 'nombre',
      ]
  );
  $city = new City;
  $city->fill($request->all());
  $city->save();

  return redirect('/admin/ciudades/');
  }

  public function edit(City $city)
  {
    $provinces = Province::all();
    return view('cities.editCity',compact('city','provinces'));
  }

   public function update(City $city, Request $request)
  {
    $this->validate(
      $request,
      [
          'name' => 'required|max:60',
          'id_province'=>'required|exists:provinces,id',

      ],
      [

      ],
      [
          'name' => 'nombre',
      ]
  );
  $city->fill($request->all());
  $city->save();

  return redirect('/admin/ciudades/');
  }
}
