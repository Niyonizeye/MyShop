@extends('Dashboard/a/includes/topbar') 

@section('content')
@include('Dashboard/a/includes/leftbar')



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <ul class="nav nav-tabs">
            <li ><a  href="{{route('team_structure')}}">Team Structure</a></li>
            <li><a  href="{{route('my_awards')}}">My Awards</a></li>
            <li><a  href="{{route('commissions')}}">Commissions</a></li>
            <li class="active"><a  href="{{route('view_points')}}">View Points</a></li>
            <li><a  href="{{route('ranking')}}">Ranking</a></li>
      
          </ul>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid card">
        <br>
        <div class="row" >
            
          <div class="col-md-4">
          <div class="card">
          
            <div class="card-body bg-sitecolor">
              <div class="info-box mb-3 ">
                <span class="info-box-icon"><i class="fas fa-tag"></i></span>
  
                <div class="info-box-content">
                  <span class="info-box-text">TOTAL POINTS</span>
                  <span class="info-box-number">200</span>
                </div>
                <!-- /.info-box-content -->
              </div>
            </div>
          </div>
         
        </div>
         <!-- END OF cl -->
         <div class="col-md-4">
          <div class="card">
          
            <div class="card-body bg-sitecolor">
              <div class="info-box mb-3 ">
                <span class="info-box-icon"><i class="fas fa-tag"></i></span>
  
                <div class="info-box-content">
                  <span class="info-box-text">POINTS BALANCE</span>
                  <span class="info-box-number">$ 5,200</span>
                </div>
                <!-- /.info-box-content -->
              </div>
            </div>
          </div>
         
        </div>
         <!-- END OF cl -->
         <div class="col-md-4">
          <div class="card">
          
            <div class="card-body bg-sitecolor">
              <div class="info-box mb-3 ">
                <span class="info-box-icon"><i class="fas fa-tag"></i></span>
  
                <div class="info-box-content">
                  <span class="info-box-text">Withdraw of Point</span>
                  <span class="info-box-number">100</span>
                </div>
                <!-- /.info-box-content -->
              </div>
            </div>
          </div>
         
        </div>
         <!-- END OF cl -->
    
      </div>
           <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header bg-info">
                  <div class="card-title">
                    TRANSACTION
                  </div>
                </div>
                <div class="card-body">
                  <table class="table">
                    <thead>
                      <th>ID</th>
                      <th>	Date</th>
                      <th>Description</th>
                      <th>Amount</th>
                      <th>Details</th>
                    </thead>
                    <tbody>
                      <tr></tr>
                    </tbody>
                  </table>
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