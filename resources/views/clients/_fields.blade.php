{{ csrf_field() }}
<div class="form-group">
  <label for="name">Nombre: </label>
  <input type="text" name="name" id="name" value="{{ old('name',$client->name)}}" placeholder="Ingresá el nombre del cliente"/>
</div>
<div class="form-group">
  <label for="phone">Teléfono: </label>
  <input type="text" name="phone" id="phone" value="{{ old('phone',$client->phone)}}" placeholder="Por ej. 221 543 3445"/>
</div>
<div class="form-group">
  <label for="address">Dirección: </label>
  <input type="text" name="address" id="address" value="{{ old('address',$client->address)}}" placeholder="Calle falsa 123 e/falsedad y mentira"/>
</div>
