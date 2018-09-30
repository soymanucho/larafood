{{ csrf_field() }}


<div>
  <label for="name">Nombre</label>
  <input type="text" name="name" id="name" value="{{ old('name',$sellable->name)}}"/>
</div>
<div>
  <label for="description">Description</label>
  <input type="text" name="description" id="description" value="{{ old('description',$sellable->description)}}"/>
</div>
<div>
  <label for="price">Price</label>
  <input type="text" name="price" id="price" value="{{ old('price',$sellable->price)}}"/>
</div>

<div class="">
  <label for="products[]">Productos</label>
  <select multiple class="form-control" id="products[]" name="products[]" >
    @foreach ($products as $product)
      <option
      @if(in_array($product->id, $sellable->productss->pluck('id')->toArray()))
        selected
      @endif
       value="{{ $product->id }} ">
        {{ $product->name }}
      </option>
    @endforeach
  </select>
</div>
