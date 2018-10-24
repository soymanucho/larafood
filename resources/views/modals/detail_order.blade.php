<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
     <h1>
       PEDIDO
       <small>#{{$order->id}}</small>
     </h1>
   </section>

   <div class="pad margin no-print">
     <div class="callout callout-info" style="margin-bottom: 0!important;">
       <h4><i class="fa fa-info"></i> Info:</h4>
       Aquí encontrarás toda la info del pedido clickeado.
     </div>
   </div>

   <!-- Main content -->
   <section class="invoice">
     <!-- title row -->
     <div class="row">
       <div class="col-xs-12">
         <h2 class="page-header">
           <i class="fa fa-globe"></i> {{$order->store->name}}
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
                 <td>{{$sellable->pivot->amount}}</td>
                 {{-- <td>{{$sellable->store->price}}</td> --}}
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
       <div class="col-xs-6">
         <p class="lead">Fecha {{$order->created_at}}</p>

         <div class="table-responsive">
           <table class="table">
             <tr>
               <th style="width:50%">Subtotal:</th>
               <td>$250.30</td>
             </tr>
             <tr>
               <th>Tax (9.3%)</th>
               <td>$10.34</td>
             </tr>
             <tr>
               <th>Shipping:</th>
               <td>$5.80</td>
             </tr>
             <tr>
               <th>Total:</th>
               <td>$265.24</td>
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
         <button type="button" class="btn btn-success pull-right"><i class="fa fa-credit-card"></i> Submit Payment
         </button>
         <button type="button" class="btn btn-primary pull-right" style="margin-right: 5px;">
           <i class="fa fa-download"></i> Generate PDF
         </button>
       </div>
     </div>
   </section>
   <!-- /.content -->
   <div class="clearfix"></div>
 </div>
