@extends('Dashboard/a/includes/topbar') 

@section('content')
@include('Dashboard/a/includes/leftbar')



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <ul class="nav nav-tabs">
          <li ><a  href="{{route('payclick')}}">Pay clicks</a></li>
          <li class="active"><a  href="{{route('advertisment')}}">Advertismet</a></li>
          <li ><a  href="{{route('advertisment')}}">Survey</a></li>
          <li ><a  href="{{route('advertisment')}}">Videos and Views</a></li>


        </ul>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
      

        <div class="row">
          <div class="col-lg-12" >
        <div class="card" >           
          <div class="card-body" >           
            <img src="{{asset('assets/a/dist/img/gif1.gif')}}" style="height:80px;" alt="Product Image" class="col-md-12" >
          </div>
           </div>
        </div> 
      </div> 
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Current Advertismet</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body p-0">
            <ul class="products-list product-list-in-card pl-2 pr-2">
              <li class="item">
                <div class="product-img">
                  <img src="{{asset('assets/a/dist/img/gif1.gif')}}"  alt="Product Image" class="img-size-50">
                </div>
                <div class="product-info">
                  <a href="javascript:void(0)" class="product-title">Samsung TV
                    <span class="badge badge-warning float-right">$1800</span></a>
                  <span class="product-description">
                    Samsung 32" 1080p 60Hz LED Smart HDTV.
                  </span>
                </div>
              </li>
              <!-- /.item -->
              <li class="item">
                <div class="product-img">
                  <img src="{{asset('assets/a/dist/img/photo2.png')}}"  alt="Product Image" class="img-size-50">
                </div>
                <div class="product-info">
                  <a href="javascript:void(0)" class="product-title">Bicycle
                    <span class="badge badge-info float-right">$700</span></a>
                  <span class="product-description">
                    26" Mongoose Dolomite Men's 7-speed, Navy Blue.
                  </span>
                </div>
              </li>
              <!-- /.item -->
              <li class="item">
                <div class="product-img">
                  <img src="{{asset('assets/a/dist/img/gif1.gif')}}"
                   alt="Product Image" class="img-size-50">
                </div>
                <div class="product-info">
                  <a href="javascript:void(0)" class="product-title">
                    Xbox One <span class="badge badge-danger float-right">
                    $350
                  </span>
                  </a>
                  <span class="product-description">
                    Xbox One Console Bundle with Halo Master Chief Collection.
                  </span>
                </div>
              </li>
              <!-- /.item -->
              <li class="item">
                <div class="product-img">
                  <img src="{{asset('assets/a/dist/img/photo2.png')}}" alt="Product Image" class="img-size-50">
                </div>
                <div class="product-info">
                  <a href="javascript:void(0)" class="product-title">PlayStation 4
                    <span class="badge badge-success float-right">$399</span></a>
                  <span class="product-description">
                    PlayStation 4 500GB Console (PS4)
                  </span>
                </div>
              </li>
              <!-- /.item -->
            </ul>
          </div>
          <!-- /.card-body -->
          <div class="card-footer text-center">
            <a href="javascript:void(0)" class="uppercase">View All Advertismets</a>
          </div>
          <!-- /.card-footer -->
        </div>
        <!-- /.card -->

        <div class="row">
            <div class="col-lg-12" >
          <div class="card" >           
            <div class="card-body" >           
              <img src="{{asset('assets/a/dist/img/photo2.png')}}" style="height:80px;" alt="Product Image" class="col-md-12" >
              <marquee behavior="" direction=""><h6>Click To View More</h6></marquee>
            </div>
             </div>
          </div> 
        </div>

        
       
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
    <!-- /.row -->

  </div>



@endsection