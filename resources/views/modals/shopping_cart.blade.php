
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Seleccioná la tienda más cercana</h5>
      </div>
      <div class="modal-body">
        <form method="post" name='selectStore' action="{!! route('modal-shopping-cart-product') !!}">
          <div class="box-body">
          {{ csrf_field() }}
            <div class="form-group">
              <label for="id_province">Tienda: </label>
              <select style="width:100%;" class="form" name="store">
                @foreach ($stores as $store)
                  <option value="{{$store->id}}">{{$store->name}} </option>
                @endforeach
              </select>
            </div>
            <div class="box-footer">
              <input style="color:white;" class="btn btn-success" type="submit" value="Continuar" name="submit"/>
            </div>
          </div>
        </form>

      </div>
      <div class="modal-footer">


      </div>
    </div>
  </div>
