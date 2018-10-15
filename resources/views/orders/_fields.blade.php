{{ csrf_field() }}

{{-- <label for="id_user">Usuario:</label>
<select class="form-control" name="id_user">
  @foreach ($users as $user)
    <option value="{{ $user->id }}"
        @if($user->id == old('id_user', $client->user->id))
          selected
        @endif
        >{{ $user->name }} ({{$user->email}}, {{$user->rol->name}})
    </option>
  @endforeach
</select> --}}
<div>
  <label for="id_store">Tienda</label>
  <select class="form-control" name="id_store">
      <option value="{{ $store->id }}">
        {{ $store->name }}
      </option>
  </select>
  <label for="id_client">Cliente</label>
  <select class="form-control" name="id_client">
    @foreach ($clients as $client)
      <option value="{{ $client->id }}">
        {{ $client->name }}
      </option>
    @endforeach
  </select>
  <label for="sellables[]">Productos</label>
  <select multiple class="form-control" name="sellables[]">
    @foreach ($sellables as $sellable)
      <option value="{{ $sellable->id }}">
        {{ $sellable->name }}
      </option>
    @endforeach
  </select>

</div>
