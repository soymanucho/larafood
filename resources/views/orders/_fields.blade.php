{{ csrf_field() }}


<div>
  <label for="name">Nombre:</label>
  <input type="text" name="name" id="name" value="{{ old('name',$order->name)}}"/>
  <br>
  <label for="phone">Teléfono:</label>
  <input type="text" name="phone" id="phone" value="{{ old('phone',$client->phone)}}"/>
  <br>
  <label for="address">Dirección:</label>
  <input type="text" name="address" id="address" value="{{ old('address',$client->address)}}"/>
  <br>
</div>
