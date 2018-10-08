{{ csrf_field() }}

<div class="">
  <label for="sellable">Vendible</label>
  <select multiple class="form-control" id="sellable" name="sellable" >
    @foreach ($sellables as $aSellable)
      <option
      @if($aSellable->id== old('sellable',$sellable->id))
        selected
      @endif
       value="{{ $aSellable->id }} ">
        {{ $aSellable->name }}
      </option>
    @endforeach
  </select>
</div>

<div>
  <label for="price">Price</label>
  @if(@isset($store->sellables->where('id',$sellable->id)->first()->pivot->price))
    <input type="text" name="price" id="price" value="{{ old('price',$store->sellables->where('id',$sellable->id)->first()->pivot->price)}}"/>
  @else
      <input type="text" name="price" id="price" value="{{ old('price',0)}}"/>
  @endif

</div>
