@extends('Dashboard/a/includes/topbar') 

@section('content')
@include('Dashboard/a/includes/leftbar')



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
 

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
      <br>
        <div class="row">
          
           <div class="col-md-4">
            <div class="card ">
              <a href="https://www.muhahe.com">

              <div class="card-body" style="background-color: #000050;color:white">
              <center>
                <h3 class="fas fa-shopping-cart"></h3>
                <h4>Our shop</h4>
              </center>
            </div>
              </a>
          </div>
           <!-- END OF cl -->
        </div>
        <div class="col-md-4">
          <div class="card bg-primary">
            <a href="https://www.booking.muhahe.com" >

            <div class="card-body">
            <center>
              <h3 class="fas fa-home"></h3>

              <h4>Our Booking</h4>
            </center>
          </div>
            </a>
        </div>
         <!-- END OF cl -->
      </div>
      <div class="col-md-4">
        <div class="card bg-info">
          <a href="{{route('other_products')}}">

          <div class="card-body">
            <center>
              <h3 class="fas fa-plus"></h3>
              <h4>Our Other Products</h4>
            </center>
        </div>
          </a>
      </div>
       <!-- END OF cl -->
    </div>
       
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
    <!-- /.row -->
  </div>
@endsection