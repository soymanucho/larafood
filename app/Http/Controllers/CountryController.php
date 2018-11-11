<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Country;
class CountryController extends Controller
{

  public function __construct()
  {
      $this->middleware('auth');
      $this->middleware('onlyRol:3');
  }

  public function show()
  {
    $countries = Country::orderby('name')->get();
    return view('countries.countries',compact('countries'));
  }

  public function delete(Country $country)
  {
    $country->delete();
    return redirect('admin/paises');
  }

  public function new()
  {
    $country = new Country();
    return view('countries.newCountry',compact('country'));
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
  $country = new Country;
  $country->fill($request->all());
  $country->save();

  return redirect('/admin/paises/');
  }

  public function edit(Country $country)
  {
    return view('countries.editCountry',compact('country'));
  }

   public function update(Country $country, Request $request)
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
  $country->fill($request->all());
  $country->save();

  return redirect('/admin/paises/');
  }
}
