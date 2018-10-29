<div id="order-modal" class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
     <h1>
       PEDIDO
       <small>#{{$order->id}}</small>
     </h1>
   </section>

   <div class="pad margin no-print">
     <div class="callout" style="margin-bottom: 0!important; background-color: {{$order->status->color}}; color:white">
       <h4><i class="glyphicon glyphicon-info-sign"></i> Info:</h4>
       El pedido se encuentra {{$order->status->name}}.
     </div>
   </div>

   <!-- Main content -->
   <section class="invoice">
     <!-- title row -->
     <div class="row">
       <div class="col-xs-12">
         <h2 class="page-header">
           <i class="fa fa-globe"></i> Tienda {{$order->store->name}}
           <small class="pull-right">Fecha: {{$order->created_at}}</small>
         </h2>
       </div>
       <!-- /.col -->
     </div>
     <!-- info row -->
     <div class="row invoice-info">
       <div class="col-sm-4 invoice-col">
         Cliente:
         <address>
           <strong>{{$order->client->name}}.</strong><br>
           {{$order->client->adress}}<br>
           Teléfono: {{$order->client->phone}}<br>
           @if ($order->client->user)
            Email: {{$order->client->user->email}}
           @endif
         </address>
       </div>
       <!-- /.col -->
       <!-- /.col -->
       <div class="col-sm-4 invoice-col">
         <b>Pedido #{{$order->id}}</b><br>
         <br>
         <b>Fecha de pedido:</b> {{$order->created_at}}<br>
       </div>
       <!-- /.col -->
     </div>
     <!-- /.row -->

     <!-- Table row -->
     <div class="row">
       <div class="col-xs-12 table-responsive">
         <table class="table table-striped">
           <thead>
           <tr>
             <th>ID Producto</th>
             <th>Nombre</th>
             <th>Cantidad</th>
             <th>Precio</th>
           </tr>
           </thead>
           <tbody>
             @foreach ($order->sellables as $sellable)
               <tr>
                 <td>{{$sellable->id}}</td>
                 <td>{{$sellable->name}}</td>
                 {{-- <td>{{$order->pivot->amount}}</td> --}}
                 <td>{{$sellable->pivot->price}}</td>
               </tr>
             @endforeach
           </tbody>
         </table>
       </div>
       <!-- /.col -->
     </div>
     <!-- /.row -->

     <div class="row">
       <!-- accepted payments column -->

       <!-- /.col -->
       <div class="col-xs-6 pull-right">
         <div class="table-responsive">
           <table class="table">
             <tr>
               <th style="width:50%">Subtotal:</th>
               <td>${{($order->total_price)*0.69}}</td>
             </tr>
             <tr>
               <th>IVA (21%)</th>
               <td>${{($order->total_price)*0.21}}</td>
             </tr>
             <tr>
               <th>Delivery:</th>
               <td>${{($order->total_price)*0.10}}</td>
             </tr>
             <tr>
               <th>Total:</th>
               <td>${{($order->total_price)}}</td>
             </tr>
           </table>
         </div>
       </div>
       <!-- /.col -->
     </div>
     <!-- /.row -->

     <!-- this row will not appear when printing -->
     <div class="row no-print">
       <div class="col-xs-12">
         <a href="invoice-print.html" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> Print</a>
         <button type="button" class="btn btn-primary pull-right" style="margin-right: 5px;">
           <i class="fa fa-download"></i> Generate PDF
         </button>
       </div>
     </div>
   </section>
   <!-- /.content -->

 </div>
