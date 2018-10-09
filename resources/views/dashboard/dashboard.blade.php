@extends('layouts.app')

@section('content')


  <div class="page-breadcrumb">
       <div class="row">
           <div class="col-12 d-flex no-block align-items-center">
               <h4 class="page-title">Dashboard</h4>
               <div class="ml-auto text-right">
                   <nav aria-label="breadcrumb">
                       <ol class="breadcrumb">
                           <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                           <li class="breadcrumb-item active" aria-current="page"></li>
                       </ol>
                   </nav>
               </div>
           </div>
       </div>
  </div>

  <div class="container-fluid">

    <div class="row">
        <!-- Column -->
        <div class="col-md-6 col-lg-4 col-xlg-3">
            <div class="card card-hover">
                <div class="box bg-danger text-center">
                    <h1 class="font-light text-white"><i class="mdi mdi-border-outside"></i></h1>
                    <h6 class="text-white">Pedido</h6>
                </div>
            </div>
        </div>
        <!-- Column -->
        <div class="col-md-6 col-lg-2 col-xlg-3">
          <div class="card card-hover">
            <div class="box bg-warning text-center">
              <h1 class="font-light text-white"><i class="mdi mdi-collage"></i></h1>
              <h6 class="text-white">En preparación</h6>
            </div>
          </div>
        </div>
        <!-- Column -->
        <div class="col-md-6 col-lg-2 col-xlg-3">
            <div class="card card-hover">
                <div class="box bg-cyan text-center">
                    <h1 class="font-light text-white"><i class="mdi mdi-view-dashboard"></i></h1>
                    <h6 class="text-white">Listo</h6>
                </div>
            </div>
        </div>
        <!-- Column -->
        <div class="col-md-6 col-lg-2 col-xlg-3">
            <div class="card card-hover">
                <div class="box bg-info text-center">
                    <h1 class="font-light text-white"><i class="mdi mdi-border-outside"></i></h1>
                    <h6 class="text-white">En camino</h6>
                </div>
            </div>
        </div>
        <!-- Column -->
        <div class="col-md-6 col-lg-2 col-xlg-3">
            <div class="card card-hover">
                <div class="box bg-success text-center">
                    <h1 class="font-light text-white"><i class="mdi mdi-arrow-all"></i></h1>
                    <h6 class="text-white">Entregado</h6>
                </div>
            </div>
        </div>
        <!-- Column -->
        
    </div>




@endsection
