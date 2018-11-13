{{ csrf_field() }}


<div class="form-group" id="inputCountry">
  <label class="control-label" for="name">Nombre</label>
  <input class="form-control" type="text" name="name" id="name" value="{{ old('name',$country->name)}}"/>
</div>
