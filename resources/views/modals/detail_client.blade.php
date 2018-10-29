<div id="order-modal" class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
     <h1>
       CLIENTE
       <small>#{{$client->id}}</small>
     </h1>
   </section>

   <!-- Main content -->
  <section class="content">

      <div class="row">
        <div class="col">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="../../dist/img/user4-128x128.jpg" alt="User profile picture">

              <h3 class="profile-username text-center">{{$client->name}}</h3>

              <p class="text-muted text-center">Miembre desde {{$client->created_at}}</p>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>Telefono</b> <a class="pull-right">{{$client->phone}}</a>
                </li>
                <li class="list-group-item">
                  <b>Dirección</b> <a class="pull-right">{{$client->address}}</a>
                </li>
                <li class="list-group-item">
                  <b>Usuario</b> <a class="pull-right">@if ($client->user)
                    {{$client->user->email}}
                  @else
                    No tiene ningún usuario asociado.
                  @endif</a>
                </li>
              </ul>

              <a href="/admin/clientes/{{$client->id}}/editar" class="btn btn-primary btn-block"><b>Editar cliente</b></a>
            </div>
            <!-- /.box-body -->
          </div>
        </div>
      </div>
  </section>

  @if ($client->orders)
    <div class="pad margin no-print">
      <div class="callout callout-danger" style="margin-bottom: 0!important; color:white">
        <h4><i class="glyphicon glyphicon-info-sign"></i> Info:</h4>
        El cliente tiene los siguientes pedidos:
        <ul>
          @foreach ($client->orders as $order)
            <li>#{{$order->id}}, de ${{$order->total_price}} en la tienda {{$order->store->name}}</li>
          @endforeach
        </ul>
      </div>
    </div>
  @endif
   <!-- /.content -->

 </div>
