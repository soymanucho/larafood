<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ingredient;
class IngredientController extends Controller
{
    public function show()
    {
      $ingredients = Ingredient::orderby('name')->paginate(10);
      return view('ingredients.ingredients',compact('ingredients'));
    }

    public function delete(Ingredient $ingredient)
    {
      $ingredient->delete();
      return redirect('admin/ingredientes');
    }

    public function new()
    {
      $ingredient = new Ingredient();
      return view('ingredients.newIngredient',compact('ingredient'));
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
    $ingredient = new Ingredient;
    $ingredient->fill($request->all());
    $ingredient->save();

    return redirect('/admin/ingredientes/');
    }

    public function edit(Ingredient $ingredient)
    {
      return view('ingredients.editIngredient',compact('ingredient'));
    }

     public function update(Ingredient $ingredient, Request $request)
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
    $ingredient->fill($request->all());
    $ingredient->save();

    return redirect('/admin/ingredientes/');
    }
}
