<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sellable;
class SellableController extends Controller
{
    public function show()
    {
      $sellables = Sellable::orderby('name')->paginate(10);
      return view('sellables.sellables',compact('sellables'));
    }

    public function delete(Sellable $sellable)
    {
      $sellable->delete();
      return redirect(route('sellable-delete'));
    }
}
