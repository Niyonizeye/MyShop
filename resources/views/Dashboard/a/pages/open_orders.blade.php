@extends('Dashboard/a/includes/topbar') 

@section('content')
@include('Dashboard/a/includes/leftbar')



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <ul class="nav nav-tabs">
          <li  ><a  href="{{route('exchange')}}">Exchange</a></li>
          <li class="active" ><a  href="{{route('open_orders')}}">My Open Orders</a></li>
          <li  ><a  href="{{route('transaction_history')}}">My transaction history</a></li>

        </ul>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
      
        <div class="row">
            
          <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                  <div class="card-title">
                    My Open Orders
                  </div>
              </div>
               <div class="card-body">
                  <h6 class="text-danger">No Open Orders Yet</h6>
               </div>
            </div>
        </div>
           <!-- END OF cl -->
        </div>
       
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
    <!-- /.row -->

  </div>
@endsection