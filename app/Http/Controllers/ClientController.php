<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
use App\User;

class ClientController extends Controller
{
  public function show()
  {
    $clients = Client::orderby('name')->with('user')->paginate(10);
    return view('clients.clients',compact('clients'));
  }

  public function delete(Client $client)
  {
    $client->delete();
    return redirect('admin/clientes');
  }

  public function new()
  {
    $client = new Client();
    $users = User::all();
    return view('clients.newClient',compact('client','users'));
  }

  public function save(Request $request)
  {
    $this->validate(
      $request,
      [
          'name' => 'required|max:60',
          'phone' => 'required|max:15',
          'address'=> 'required|max:60',
          'id_user'=>'nullable|exists:users,id',

      ],
      [

      ],
      [
          'name' => 'nombre',
          'phone' => 'teléfono',
          'address' => 'dirección',
      ]
  );
  $client = new Client;
  $client->fill($request->all());
  $client->save();

  return redirect('/admin/clientes/');
  }

  public function edit(Client $client)
  {
    $users = User::all();
    return view('clients.editClient',compact('client','users'));
  }

   public function update(Client $client, Request $request)
  {
    $this->validate(
      $request,
      [
          'name' => 'required|max:60',
          'phone' => 'required|max:15',
          'address'=> 'required|max:60',
          'id_user'=>'nullable|exists:users,id',

      ],
      [

      ],
      [
          'name' => 'nombre',
          'phone' => 'teléfono',
          'address' => 'dirección',
      ]
  );
  $client->fill($request->all());
  $client->save();

  return redirect('/admin/clientes/');
  }
}
