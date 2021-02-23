@extends('Dashboard/a/includes/topbar') 

@section('content')
@include('Dashboard/a/includes/leftbar')

<style>
  .btn-warning{
    margin-top: 10px;
    border:blue;
    border-radius: 30%;
    font-weight: bold;
  }
</style>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <ul class="nav nav-tabs">
            <li class="active"><a  href="{{route('packages_list')}}">Package List</a></li>
            <li ><a  href="{{route('purchased_packages')}}">Purchased Packages</a></li>
          
          </ul>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container">
      <div class="row">
        <div class="col-md-4">
          
            <div class="card-body">
              <div class="info bg-secondary">
                <i class="fas fa-tag"></i>
  
                  <center><h3>Explorer</h3>
                    <hr>
                    <br><br>
                    <h4>$40</h4></center>
                <br><br>
                <!-- /.info-box-content -->
                <ul>
                  <li>Education package from mygithub.com Value €40</li>
                  <li>Muhahe Rewards 50 pc</li>
                  <li>Streamline up to level 4</li>
                  <li>Matching bonus up to level 1</li>
                  <li>Free MB on your prefered number</li>
                </ul>

                <div class="bg-info container-fluid">
                  <div class="col-md-12">
                    <center><div class="btn btn-warning">
                      Select
                    </div></center>
                    <br>
                  </div>
                </div>
              </div>
            </div>
         
         
        </div>
         <!-- END OF cl -->
         <div class="col-md-4">
          
          <div class="card-body">
            <div class="info bg-secondary">
              <i class="fas fa-tag"></i>

                <center><h3>Intermediate</h3>
                  <hr>
                  <br><br>
                  <h4>$60</h4></center>
              <br><br>
              <!-- /.info-box-content -->
              <ul>
                <li>Education package from mygithub.com Value €60</li>
                <li>Muhahe Rewards 50 pc</li>
                <li>Streamline up to level 4</li>
                <li>Matching bonus up to level 1</li>
                <li>Free MB on your prefered number</li>
              </ul>

              <div class="bg-info container-fluid">
                <div class="col-md-12">
                  <center><div class="btn btn-warning">
                    Select
                  </div></center>
                  <br>
                </div>
              </div>
            </div>
          </div>
       
       
      </div>
       <!-- END OF cl -->
       <div class="col-md-4">
          
        <div class="card-body">
          <div class="info bg-secondary">
            <i class="fas fa-tag"></i>

              <center><h3>Senior</h3>
                <hr>
                <br><br>
                <h4>$80</h4></center>
            <br><br>
            <!-- /.info-box-content -->
            <ul>
              <li>Education package from mygithub.com Value €80</li>
              <li>Muhahe Rewards 50 pc</li>
              <li>Streamline up to level 4</li>
              <li>Matching bonus up to level 1</li>
              <li>Free MB on your prefered number</li>
            </ul>

            <div class="bg-info container-fluid">
              <div class="col-md-12">
                <center><div class="btn btn-warning">
                  Select
                </div></center>
                <br>
              </div>
            </div>
          </div>
        </div>
     
     
    </div>
     <!-- END OF cl -->
        </div>
        <div class="row">
          <div class="col-md-4">
          
            <div class="card-body">
              <div class="info bg-secondary">
                <i class="fas fa-tag"></i>
  
                  <center><h3>White</h3>
                    <hr>
                    <br><br>
                    <h4>$100</h4></center>
                <br><br>
                <!-- /.info-box-content -->
                <ul>
                  <li>Education package from mygithub.com Value €100</li>
                  <li>Muhahe Rewards 50 pc</li>
                  <li>Streamline up to level 4</li>
                  <li>Matching bonus up to level 1</li>
                  <li>Free MB on your prefered number</li>
                </ul>

                <div class="bg-info container-fluid">
                  <div class="col-md-12">
                    <center><div class="btn btn-warning">
                      Select
                    </div></center>
                    <br>
                  </div>
                </div>
              </div>
            </div>
         
         
        </div>
         <!-- END OF cl -->
         <div class="col-md-4">
          
          <div class="card-body">
            <div class="info bg-secondary">
              <i class="fas fa-tag"></i>

                <center><h3>Gold</h3>
                  <hr>
                  <br><br>
                  <h4>$120</h4></center>
              <br><br>
              <!-- /.info-box-content -->
              <ul>
                <li>Education package from mygithub.com Value €120</li>
                <li>Muhahe Rewards 50 pc</li>
                <li>Streamline up to level 4</li>
                <li>Matching bonus up to level 1</li>
                <li>Free MB on your prefered number</li>
              </ul>

              <div class="bg-info container-fluid">
                <div class="col-md-12">
                  <center><div class="btn btn-warning">
                    Select
                  </div></center>
                  <br>
                </div>
              </div>
            </div>
          </div>
       
       
      </div>
       <!-- END OF cl -->
       <div class="col-md-4">
          
        <div class="card-body">
          <div class="info bg-secondary">
            <i class="fas fa-tag"></i>

              <center><h3>Bronze</h3>
                <hr>
                <br><br>
                <h4>$150</h4></center>
            <br><br>
            <!-- /.info-box-content -->
            <ul>
              <li>Education package from mygithub.com Value €150</li>
              <li>Muhahe Rewards 50 pc</li>
              <li>Streamline up to level 4</li>
              <li>Matching bonus up to level 1</li>
              <li>Free MB on your prefered number</li>
            </ul>

            <div class="bg-info container-fluid">
              <div class="col-md-12">
                <center><div class="btn btn-warning">
                  Select
                </div></center>
                <br>
              </div>
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