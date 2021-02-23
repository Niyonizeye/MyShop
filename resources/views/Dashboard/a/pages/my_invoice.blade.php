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
          
            <div class="card-body">
              <div class="info-box mb-3 bg-secondary">
                <span class="info-box-icon"><i class="fas fa-tag"></i></span>
  
                <div class="info-box-content">
                  <span class="info-box-text">Balance</span>
                  <span class="info-box-number">$ 5,200</span>
                </div>
                <!-- /.info-box-content -->
              </div>
            </div>
          </div>
         
        </div>
         <!-- END OF cl -->
         <div class="col-md-3">
          <div class="card card-primary card-outline">
          
            <div class="card-body">
              <div class="info-box mb-3 bg-secondary">
                <span class="info-box-icon"><i class="fas fa-tag"></i></span>
  
                <div class="info-box-content">
                  <span class="info-box-text">Balance</span>
                  <span class="info-box-number">$ 5,200</span>
                </div>
                <!-- /.info-box-content -->
              </div>
            </div>
          </div>
         
        </div>
         <!-- END OF cl -->
         <div class="col-md-3">
          <div class="card card-primary card-outline">
          
            <div class="card-body">
              <div class="info-box mb-3 bg-secondary">
                <span class="info-box-icon"><i class="fas fa-tag"></i></span>
  
                <div class="info-box-content">
                  <span class="info-box-text">Balance</span>
                  <span class="info-box-number">$ 5,200</span>
                </div>
                <!-- /.info-box-content -->
              </div>
            </div>
          </div>
         
        </div>
         <!-- END OF cl -->
         <div class="col-md-3">
          <div class="card card-primary card-outline">
          
            <div class="card-body">
              <div class="info-box mb-3 bg-secondary">
                <span class="info-box-icon"><i class="fas fa-tag"></i></span>
  
                <div class="info-box-content">
                  <span class="info-box-text">Balance</span>
                  <span class="info-box-number">$ 5,200</span>
                </div>
                <!-- /.info-box-content -->
              </div>
            </div>
          </div>
         
        </div>
         <!-- END OF cl -->
      </div>
      
        <div class="row">
            
          <div class="card col-md-12">
            <div class="card-header border-0">
              <div class="d-flex justify-content-between">
                <h3 class="card-title">Sales</h3>
                <a href="javascript:void(0);">View Report</a>
              </div>
            </div>
            <div class="card-body">
              <div class="d-flex">
                <p class="d-flex flex-column">
                  <span class="text-bold text-lg">$18,230.00</span>
                  <span>Sales Over Time</span>
                </p>
                <p class="ml-auto d-flex flex-column text-right">
                  <span class="text-success">
                    <i class="fas fa-arrow-up"></i> 33.1%
                  </span>
                  <span class="text-muted">Since last month</span>
                </p>
              </div>
              <!-- /.d-flex -->

              <div class="position-relative mb-4">
                <canvas id="sales-chart" height="200"></canvas>
              </div>

              <div class="d-flex flex-row justify-content-end">
                <span class="mr-2">
                  <i class="fas fa-square text-primary"></i> This year
                </span>

                <span>
                  <i class="fas fa-square text-gray"></i> Last year
                </span>
              </div>
            </div>
          </div>
          <!-- /.card -->
        </div>
       
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
    <!-- /.row -->

  </div>



@endsection