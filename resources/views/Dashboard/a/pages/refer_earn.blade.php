@extends('Dashboard/a/includes/topbar') 
@section('content')
@include('Dashboard/a/includes/leftbar')



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Refer & Earn</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Refer & Earn</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
  
    <div class="content">
      <div class="container-fluid">
    
        <div class="row">
          <div class="col-lg-8">
            

            <div class="card card-primary card-outline">
              <div class="card-body">
                <h5 class="card-title">Your Refferal Link</h5><br>
                  <div class="row">
                    <div class="col-md-9">
                      <input type="text" name="" value="https://share.muhahe.com/register.php?referral=manzi22" class="form-control" disabled=""><br>

                    </div>
                      <div class="col-md-3">
                        <a href="#" class="btn btn-primary">Copy Link</a>

                      </div>
                  </div>
                          
                  <h5 class="card-title">Your Refferal Code</h5><br>
                  <div class="row">
                    <div class="col-md-9">
                      <input type="text" name="" value="473255689" disabled=""><br>

                    </div>
                      <div class="col-md-3">
                        <a href="#" class="btn btn-secondary">Copy code</a>

                      </div>
                  </div>
                  
              </div>
            </div><!-- /.card -->


          </div>
          <div class="col-md-4">
            <div class="card card-primary card-leftline">
              <div class="card-header">
                <a href="#" >
                <h5 class="m-0">Total Refer Earnings</h5>
              </div>
              <div class="card-body" >

                <div class="card">
                  
                  <div class="card-body" >
    
                    <h4>&nbsp;&nbsp; $31.00</h4>
                </div>
                </a>
               
                </div>
               
            </div>
            </a>
            </div>
           
          </div>
      

        </div>
   
        <div class="row">
            <div class="col-lg-12" >
                <!-- Map card -->
                            <div class="card " style="background-color:gray; width: 100%; ">
                              <div class="card-header " style="background-color:gray;">
                                <h3 class="card-title" style="color: white">
                                  Share And Earn $20
                                </h3>
                
                                
                                <!-- /.card-tools -->
                              </div>
                              <div class="card-body" >
                              <div class="row">
                                 <div class="btn btn-primary form-control">Share</div>
                                </div><br>
                                    <!-- /.card -->
                                    <div class="row">
                                      <div class="btn btn-success form-control">Share</div>
                                     </div><br>
                                         <!-- /.card -->
                                         <div class="row">
                                          <div class="btn btn-info form-control">Share</div>
                                         </div><br>
                                             <!-- /.card -->
                                             <div class="row">
                                              <div class="btn btn-primary form-control">Share</div>
                                             </div><br>
                                                 <!-- /.card -->
                                                 <div class="row">
                                                  <div class="btn btn-primary form-control">Share</div>
                                                 </div>
                                                     <!-- /.card -->
                                    
                         
                              </div>
                              
                            </div>
                            <!-- /.card -->
                
                            <!-- solid sales graph -->
                
                
                          </div>
        </div>
      
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
    <!-- /.row -->

  </div>



@endsection