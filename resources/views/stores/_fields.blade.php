{{ csrf_field() }}


<div>
  <label for="name">Nombre:</label>
  <input type="text" name="name" id="name" value="{{ old('name',$store->name)}}"/>
  <br>
  <label for="address">Dirección:</label>
  <input type="text" name="address" id="address" value="{{ old('address',$store->address)}}"/>
</div>
