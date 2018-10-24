@extends('layouts.app')

@section('title')
  Inicio
@endsection

@section('breadcrumb-items')
  <li class="active">Inicio</li>
@endsection


@section('content')

  <div class="row">
    <div class="col-md-12">
      <div class="box box-success">
        <div class="box-header with-border">
          <h3 class="box-title">PEDIDOS</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body no-padding">


          @foreach ($statuses as $status)
              <div class="box box-default collapsed-box" style="background-color: {{$status->color}}">
                <div class="box-header with-border">
                  <div class="info-box" style="background-color: {{$status->color}}">
                    <span class="info-box-icon"><i class="ion ion-ios-more"></i></span>

                    <div class="info-box-content">
                      <span class="info-box-text" style='color:white'>{{$status->name}} </span>

                      <span class="info-box-number" style='color:white'>{{$store->numberOfOrdersInStatus($status)}}  (${{$store->totalPriceOfOrdersInStatus($status)}})</span>

                      <div class="progress">
                        <div class="progress-bar" style="width: {{$store->percentageOfOrdersInStatus($status)}}%"></div>
                      </div>
                      <span class="progress-description" style='color:white'>
                            {{$store->percentageOfOrdersInStatus($status)}}%
                          </span>
                    </div>
                    <!-- /.info-box-content -->
                  </div>

                  <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                    </button>
                  </div>
                  <!-- /.box-tools -->
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <div class="table-responsive" style="background-color: white">
                    <table class="table no-margin">
                        <thead>
                        <tr>
                          <th>Orden nº</th>
                          <th>Cliente</th>
                          <th>Precio</th>
                          <th>Tienda</th>
                          <th>Creado hace</th>
                          <th></th>
                        </tr>
                        </thead>
                        <tbody>
                          @foreach ($store->orders->where('id_status', $status->id) as $order)
                              <tr>
                                <td><a class="fancybox" href="{{ route('modal-order', compact('order')) }}">{{$order->id}}</a></td>
                                <td><a href="">{{$order->client->name}}</a></td>
                                <td><a href="">${{$order->total_price}}</a></td>
                                <td><a href="">{{$order->store->name}}</a></td>
                                <td><a href="">{{$order->elapsedMinutes()}} min</a></td>
                                <td>borrar</td>
                              </tr>
                          @endforeach
                        </tbody>
                    </table>
                  </div>
                </div>
                  <!-- /.box-body -->
            </div>
          @endforeach
        </div>
      </div>
      <!-- /.info-box-content -->
    </div>

    <!-- /.col -->
  </div>
  <div class="row">
    <div class="col-md-6">
      <!-- USERS LIST -->
      <div class="box box-danger">
        <div class="box-header with-border">
          <h3 class="box-title">Clientes recientes</h3>

          <div class="box-tools pull-right">
            <span class="label label-danger">8 Nuevos Clientes</span>
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
            </button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body no-padding">
          <ul class="users-list clearfix">
            <li>
              <img src="dist/img/user1-128x128.jpg" alt="User Image">
              <a class="users-list-name" href="#">Alexander Pierce</a>
              <span class="users-list-date">Today</span>
            </li>
            <li>
              <img src="dist/img/user8-128x128.jpg" alt="User Image">
              <a class="users-list-name" href="#">Norman</a>
              <span class="users-list-date">Yesterday</span>
            </li>
            <li>
              <img src="dist/img/user7-128x128.jpg" alt="User Image">
              <a class="users-list-name" href="#">Jane</a>
              <span class="users-list-date">12 Jan</span>
            </li>
            <li>
              <img src="dist/img/user6-128x128.jpg" alt="User Image">
              <a class="users-list-name" href="#">John</a>
              <span class="users-list-date">12 Jan</span>
            </li>
            <li>
              <img src="dist/img/user2-160x160.jpg" alt="User Image">
              <a class="users-list-name" href="#">Alexander</a>
              <span class="users-list-date">13 Jan</span>
            </li>
            <li>
              <img src="dist/img/user5-128x128.jpg" alt="User Image">
              <a class="users-list-name" href="#">Sarah</a>
              <span class="users-list-date">14 Jan</span>
            </li>
            <li>
              <img src="dist/img/user4-128x128.jpg" alt="User Image">
              <a class="users-list-name" href="#">Nora</a>
              <span class="users-list-date">15 Jan</span>
            </li>
            <li>
              <img src="dist/img/user3-128x128.jpg" alt="User Image">
              <a class="users-list-name" href="#">Nadia</a>
              <span class="users-list-date">15 Jan</span>
            </li>
          </ul>
          <!-- /.users-list -->
        </div>
        <!-- /.box-body -->
        <div class="box-footer text-center">
          <a href="javascript:void(0)" class="uppercase">View All Users</a>
        </div>
        <!-- /.box-footer -->
      </div>
      <!--/.box -->
    </div>
    <div class="col-md-4">
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Browser Usage</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col-md-8">
              <div class="chart-responsive">
                <canvas id="pieChart" height="150"></canvas>
              </div>
              <!-- ./chart-responsive -->
            </div>
            <!-- /.col -->
            <div class="col-md-4">
              <ul class="chart-legend clearfix">
                <li><i class="fa fa-circle-o text-red"></i> Chrome</li>
                <li><i class="fa fa-circle-o text-green"></i> IE</li>
                <li><i class="fa fa-circle-o text-yellow"></i> FireFox</li>
                <li><i class="fa fa-circle-o text-aqua"></i> Safari</li>
                <li><i class="fa fa-circle-o text-light-blue"></i> Opera</li>
                <li><i class="fa fa-circle-o text-gray"></i> Navigator</li>
              </ul>
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.box-body -->
        <div class="box-footer no-padding">
          <ul class="nav nav-pills nav-stacked">
            <li><a href="#">United States of America
              <span class="pull-right text-red"><i class="fa fa-angle-down"></i> 12%</span></a></li>
            <li><a href="#">India <span class="pull-right text-green"><i class="fa fa-angle-up"></i> 4%</span></a>
            </li>
            <li><a href="#">China
              <span class="pull-right text-yellow"><i class="fa fa-angle-left"></i> 0%</span></a></li>
          </ul>
        </div>
        <!-- /.footer -->
      </div>
    </div>
  </div>
  <div class="row">
    <!-- Left col -->
      <div class="col-md-8">

        <div class="box box-info">
          <div class="box-header with-border">
            <h3 class="box-title">Latest Orders</h3>

            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
              </button>
              <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
            </div>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <div class="table-responsive">
              <table class="table no-margin">
                <thead>
                <tr>
                  <th>Order ID</th>
                  <th>Item</th>
                  <th>Status</th>
                  <th>Popularity</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td><a href="pages/examples/invoice.html">OR9842</a></td>
                  <td>Call of Duty IV</td>
                  <td><span class="label label-success">Shipped</span></td>
                  <td>
                    <div class="sparkbar" data-color="#00a65a" data-height="20">90,80,90,-70,61,-83,63</div>
                  </td>
                </tr>
                <tr>
                  <td><a href="pages/examples/invoice.html">OR1848</a></td>
                  <td>Samsung Smart TV</td>
                  <td><span class="label label-warning">Pending</span></td>
                  <td>
                    <div class="sparkbar" data-color="#f39c12" data-height="20">90,80,-90,70,61,-83,68</div>
                  </td>
                </tr>
                <tr>
                  <td><a href="pages/examples/invoice.html">OR7429</a></td>
                  <td>iPhone 6 Plus</td>
                  <td><span class="label label-danger">Delivered</span></td>
                  <td>
                    <div class="sparkbar" data-color="#f56954" data-height="20">90,-80,90,70,-61,83,63</div>
                  </td>
                </tr>
                <tr>
                  <td><a href="pages/examples/invoice.html">OR7429</a></td>
                  <td>Samsung Smart TV</td>
                  <td><span class="label label-info">Processing</span></td>
                  <td>
                    <div class="sparkbar" data-color="#00c0ef" data-height="20">90,80,-90,70,-61,83,63</div>
                  </td>
                </tr>
                <tr>
                  <td><a href="pages/examples/invoice.html">OR1848</a></td>
                  <td>Samsung Smart TV</td>
                  <td><span class="label label-warning">Pending</span></td>
                  <td>
                    <div class="sparkbar" data-color="#f39c12" data-height="20">90,80,-90,70,61,-83,68</div>
                  </td>
                </tr>
                <tr>
                  <td><a href="pages/examples/invoice.html">OR7429</a></td>
                  <td>iPhone 6 Plus</td>
                  <td><span class="label label-danger">Delivered</span></td>
                  <td>
                    <div class="sparkbar" data-color="#f56954" data-height="20">90,-80,90,70,-61,83,63</div>
                  </td>
                </tr>
                <tr>
                  <td><a href="pages/examples/invoice.html">OR9842</a></td>
                  <td>Call of Duty IV</td>
                  <td><span class="label label-success">Shipped</span></td>
                  <td>
                    <div class="sparkbar" data-color="#00a65a" data-height="20">90,80,90,-70,61,-83,63</div>
                  </td>
                </tr>
                </tbody>
              </table>
            </div>
            <!-- /.table-responsive -->
          </div>
          <!-- /.box-body -->
          <div class="box-footer clearfix">
            <a href="javascript:void(0)" class="btn btn-sm btn-info btn-flat pull-left">Place New Order</a>
            <a href="javascript:void(0)" class="btn btn-sm btn-default btn-flat pull-right">View All Orders</a>
          </div>
          <!-- /.box-footer -->
        </div>

      </div>
      <div class="col-md-4">

        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Recently Added Products</h3>

            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
              </button>
              <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
            </div>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <ul class="products-list product-list-in-box">
              <li class="item">
                <div class="product-img">
                  <img src="dist/img/default-50x50.gif" alt="Product Image">
                </div>
                <div class="product-info">
                  <a href="javascript:void(0)" class="product-title">Samsung TV
                    <span class="label label-warning pull-right">$1800</span></a>
                  <span class="product-description">
                        Samsung 32" 1080p 60Hz LED Smart HDTV.
                      </span>
                </div>
              </li>
              <!-- /.item -->
              <li class="item">
                <div class="product-img">
                  <img src="dist/img/default-50x50.gif" alt="Product Image">
                </div>
                <div class="product-info">
                  <a href="javascript:void(0)" class="product-title">Bicycle
                    <span class="label label-info pull-right">$700</span></a>
                  <span class="product-description">
                        26" Mongoose Dolomite Men's 7-speed, Navy Blue.
                      </span>
                </div>
              </li>
              <!-- /.item -->
              <li class="item">
                <div class="product-img">
                  <img src="dist/img/default-50x50.gif" alt="Product Image">
                </div>
                <div class="product-info">
                  <a href="javascript:void(0)" class="product-title">Xbox One <span
                      class="label label-danger pull-right">$350</span></a>
                  <span class="product-description">
                        Xbox One Console Bundle with Halo Master Chief Collection.
                      </span>
                </div>
              </li>
              <!-- /.item -->
              <li class="item">
                <div class="product-img">
                  <img src="dist/img/default-50x50.gif" alt="Product Image">
                </div>
                <div class="product-info">
                  <a href="javascript:void(0)" class="product-title">PlayStation 4
                    <span class="label label-success pull-right">$399</span></a>
                  <span class="product-description">
                        PlayStation 4 500GB Console (PS4)
                      </span>
                </div>
              </li>
              <!-- /.item -->
            </ul>
          </div>
          <!-- /.box-body -->
          <div class="box-footer text-center">
            <a href="javascript:void(0)" class="uppercase">View All Products</a>
          </div>
          <!-- /.box-footer -->
        </div>

      </div>
  </div>

<script type="text/javascript">
window.addEventListener('load',function() {
	$(".fancybox").fancybox({
		maxWidth	: 800,
		maxHeight	: 600,
		fitToView	: false,
		width		: '70%',
		height		: '70%',
		autoSize	: false,
		closeClick	: false,
		openEffect	: 'none',
		closeEffect	: 'none',
    type: 'ajax'
	});
});
</script>

@endsection
