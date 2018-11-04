{{ csrf_field() }}

<div class="form-group">
  <label for="id_store">Tienda</label>
  <select class="form-control" name="id_store">
      <option value="{{ $store->id }}">
        {{ $store->name }}
      </option>
  </select>
</div>
<div class="form-group">
  <label for="id_client">Cliente</label>
  <select class="form-control select2" name="id_client">
    @if ($order->client)
      <option selected  value="{{$order->client->id}}">{{$order->client->name}}</option>
    @endif
    @foreach ($clients as $client)
      <option value="{{ $client->id }}">
        {{ $client->name }}
      </option>
    @endforeach
  </select>
</div>
<div class="form-group">
  <label for="sellables[]">Productos</label>
  <select multiple="multiple" class="form-control select2" name="sellables[]">
    @foreach ($sellables as $sellable)
      <option value="{{ $sellable->id }}">
        {{ $sellable->name }}
      </option>
    @endforeach
  </select>
</div>
