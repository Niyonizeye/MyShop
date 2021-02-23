@extends('Dashboard/a/includes/topbar') 

@section('content')
@include('Dashboard/a/includes/leftbar')



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <ul class="nav nav-tabs">
            <li ><a  href="{{route('packages_list')}}">Package List</a></li>
            <li class="active"><a  href="{{route('purchased_packages')}}">Purchased Packages</a></li>
          
          </ul>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
      <div class="row">
        <div class="col-md-4">
          <div class="card ">
          
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
         <div class="col-md-4">
          <div class="card ">
          
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
         <div class="col-md-4">
          <div class="card ">
          
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
         
       
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
    <!-- /.row -->

  </div>



@endsection