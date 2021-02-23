@extends('Dashboard/a/includes/topbar') 

@section('content')
@include('Dashboard/a/includes/leftbar')



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <ul class="nav nav-tabs">
            <li ><a  href="{{route('balance')}}">Cash Acc</a></li>
            <li><a  href="{{route('coin_account')}}">Coin Acc</a></li>
            <li><a  href="{{route('trading_account')}}">Trading Acc</a></li>
            <li class="active"><a  href="{{route('my_invoice')}}">My Invoice</a></li>
          </ul>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
      
        <div class="row">
            
            <div class="col-md-3">
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h5 class="m-0">Featured</h5>
              </div>
              <div class="card-body">
                <h6 class="card-title">Special title treatment</h6>

                    <a href="#" class="btn btn-primary">Go somewhere</a>
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