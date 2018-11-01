@extends('layouts.datatable')

@section('header')
  <th>Nombre</th>
  <th>Teléfono</th>
  <th>Dirección</th>
  <th>Tiene usuario creado?</th>
  <th>Acciones</th>
@endsection

@section('body')
  @foreach($clients as $client)
    <tr>

      <td><a class="fancybox" href="{{ route('modal-client', compact('client')) }}">{{$client->name}}</a></td>
      <td>  {{ $client->phone }} </td>
      <td>  {{ $client->address }}</td>
      <td>  @if ($client->user)
              {{$client->user->email}} ({{$client->user->rol->name}})
            @else
                No
            @endif
      </td>
      <td>
        <form class="" action="/admin/clientes/{{$client->id}}/eliminar" method="post">
          {{ csrf_field() }}
          {{ method_field('delete') }}
          <a class="btn btn-sm btn-warning" href="/admin/clientes/{{$client->id}}/editar">Editar</a>
          <input class="btn btn-sm btn-danger" type="submit" name="" value="Eliminar">

        </form>

      </td>

    </tr>
  @endforeach

@endsection
