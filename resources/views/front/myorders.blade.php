@extends('layouts.frontapp')

@section('title')
  {{ config('app.name', 'LaraFood') }}
@endsection

@section('content')
  <div style="background-color: red; background-image: url('front/img/top-banner.jpg'); height:65px; background-size: cover;
  background-repeat: no-repeat;"></div>
<div class="container-fluid">

  <div class="row">
    <div class="col-12">
      <section class="menu-area section-gap" id="menu">
          <div class="container">
            <div class="row d-flex justify-content-center">
              <div class="menu-content pb-70 col-lg-8">
                <div class="title text-center">
                  <h1 class="mb-10">Acá podes ver tus pedidos, {{Auth::user()->name

                  }}!</h1>
                  <p></p>
                </div>
              </div>
            </div>
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>ID Pedido</th>
                  <th>Cliente</th>
                  <th>Estado</th>
                  {{-- <th>Tienda</th> --}}
                  <th>Precio</th>

                </tr>
                </thead>
                <tbody>
                  @foreach($orders as $order)
                      <tr>
                        <td>{{$order->id}}</td>
                        <td>  {{ $order->client->name }}</td>
                        <td><span class="badge" style="color:white; background-color:{{$order->status->color}}">{{$order->status->name}}</span></td>
                        {{-- <td>  {{ $order->store->name }}</td> --}}
                        <td>  ${{ $order->total_price }}</td>



                      </tr>
                  @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>ID Pedido</th>
                  <th>Cliente</th>
                  <th>Estado</th>
                  {{-- <th>Tienda</th> --}}
                  <th>Precio</th>

                </tr>
                </tfoot>
              </table>

            </div>






          </div>
      </section>
    </div>

  </div>
</div>
@endsection
