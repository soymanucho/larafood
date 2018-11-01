{{ csrf_field() }}


<div class="form-group">
  <label for="name">Nombre: </label>
  <input type="text" name="name" id="name" value="{{ old('name',$city->name)}}"/>
</div>
