@extends('layouts.app')

@section('title')
Tiendas
@endsection


@section('content')

    <a class="float-right btn btn-success btn-lg" href="/admin/tiendas/agregar">Nueva</a>
    <br><br>
    @include('stores.datatable')

@endsection
