@extends('Dashboard/a/includes/topbar') 
@section('content')
@include('Dashboard/a/includes/leftbar')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <ul class="nav nav-tabs">
        <li class="active"><a  href="{{route('balance')}}">My Profile</a></li>
        <li><a  href="{{route('coin_account')}}">Payment Details</a></li>
        <li><a  href="{{route('trading_account')}}">Verify Account</a></li>
      </ul>
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->  
       
<br>
    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
            <div class="col-md-11">
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h5 class="m-0">Account Details</h5>
              </div>
              <div class="card-body">
                  
                <div class="row">
                  <div class="col-md-6">
                    <p>Full Name:</p>
                  <input type="text" name="" value="Hirwa Blaise" class="form-control" ><br>
                  <p>Email:</p>
                  <input type="text" name="" value="manzemery@gmail.com" class="form-control" ><br>
                  <p>Username:</p>
                  <input type="text" name="" value="Hirwa21" class="form-control" disabled ><br>

                  </div>
                  <div class="col-md-6">
                    <p>Mobile Phone:</p>
                  <input type="text" name="" value="+250788337746" class="form-control" ><br>
                  <p>Date of Birth:</p>
                  <input type="text" name="" value="03/10/1991" class="form-control" ><br>
                  <p>Language:</p>
                  <select name="" id="" class="form-control">
                    <option value="">English</option>
                    <option value="">French</option>
                    <option value="">Kiswahili</option>
              
                </select>
                  </div>
                </div>
                  <div class="btn btn-lg btn-success">Update Profile</div>

              </div>
            </div>
           
          </div>
           <!-- END OF cl -->
        </div>
        <!-- /.row -->
        <br>
        
        <div class="row">

            <div class="col-md-8">
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h5 class="m-0">Payment Details</h5>
              </div>
              <div class="card-body">
                  <p>Payment Method:</p>
                  <select name="" id="" class="form-control">
                      <option value="">Bitcoin</option>
                      <option value="">Paypal</option>
                      <option value="">Dagcoin</option>
                
                  </select>
                  <p>Address:</p>
                  <input type="text" name="" value="manzemery@gmail.com" class="form-control" ><br>
                  
                  <div class="btn btn-lg btn-success">Add Payment Method</div>

              </div>
            </div>
           
          </div>
           <!-- END OF cl -->
        </div>
        <!-- /.row -->
  
          <!-- Main row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
    <!-- /.row -->

  </div>



@endsection