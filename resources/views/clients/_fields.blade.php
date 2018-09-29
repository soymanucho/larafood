{{ csrf_field() }}


<div>
  <label for="name">Nombre:</label>
  <input type="text" name="name" id="name" value="{{ old('name',$client->name)}}"/>
  <br>
  <label for="phone">Teléfono:</label>
  <input type="text" name="phone" id="phone" value="{{ old('phone',$client->phone)}}"/>
  <br>
  <label for="address">Dirección:</label>
  <input type="text" name="address" id="address" value="{{ old('address',$client->address)}}"/>
  <br>
  {{-- <label for="id_user">Usuario:</label>
  <select class="form-control" name="id_user">
    @foreach ($users as $user)
      <option value="{{ $user->id }}"
          @if($user->id == old('id_user', $client->user->id))
            selected
          @endif
          >{{ $user->name }} ({{$user->email}})
      </option>
    @endforeach
  </select> --}}
</div>
