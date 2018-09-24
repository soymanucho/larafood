<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Province;
use App\Country;

class ProvinceController extends Controller
{
  public function show()
  {
    $provinces = Province::orderby('name')->with('country')->paginate(10);
    return view('provinces.provinces',compact('provinces'));
  }

  public function delete(Province $province)
  {
    $province->delete();
    return redirect('admin/provincias');
  }

  public function new()
  {
    $province = new Province();
    $countries = Country::orderby('name')->get();
    return view('provinces.newProvince',compact('province','countries'));
  }

  public function save(Request $request)
  {
    $this->validate(
      $request,
      [
          'name' => 'required|max:60',
          'id_country'=>'required|exists:countries,id',


      ],
      [

      ],
      [
          'name' => 'nombre',
      ]
  );
  $province = new Province;
  $province->fill($request->all());
  $province->save();

  return redirect('/admin/provincias/');
  }

  public function edit(Province $province)
  {
    $countries = Country::all();
    return view('provinces.editProvince',compact('province','countries'));
  }

   public function update(Province $province, Request $request)
  {
    $this->validate(
      $request,
      [
          'name' => 'required|max:60',
          'id_country'=>'required|exists:countries,id',

      ],
      [

      ],
      [
          'name' => 'nombre',
      ]
  );
  $province->fill($request->all());
  $province->save();

  return redirect('/admin/provincias/');
  }
}
