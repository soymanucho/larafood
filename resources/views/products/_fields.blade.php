{{ csrf_field() }}


<div>
  <label for="name">Nombre</label>
  <input type="text" name="name" id="name" value="{{ old('name',$product->name)}}"/>
</div>
<div>
  <label for="description">Description</label>
  <input type="text" name="description" id="description" value="{{ old('description',$product->name)}}"/>
</div>
<div>
  <label for="price">Price</label>
  <input type="text" name="price" id="price" value="{{ old('price',$product->price)}}"/>
</div>

<div class="">
  <label for="ingredients[]">Ingredients</label>
  <select multiple class="form-control" id="ingredients[]" name="ingredients[]" >
    @foreach ($ingredients as $ingredient)
      <option value="{{ $ingredient->id }}">
        {{ $ingredient->name }}
      </option>
    @endforeach
  </select>
</div>
