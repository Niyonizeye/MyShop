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
            <li class="active"><a  href="{{route('my_awards')}}">My Awards</a></li>
            <li><a  href="{{route('commissions')}}">Commissions</a></li>
            <li><a  href="{{route('view_points')}}">View Points</a></li>
            <li><a  href="{{route('ranking')}}">Ranking</a></li>
      
          </ul>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
      
           <!-- /.card -->
         <div class="row">
          <div class="col-md-5">
            <div class="card ">
                <a href="#">  
                     <div class="card-header bg-secondary">
                <h5 class="m-0">CROWN AMBASSADOR</h5>
                    </div>
                    <div class="card-body ">

                      <img src="{{asset('assets/a/dist/img/avatar2.png')}}"
                      alt="Product Image" height="120px" width="100%">
                          
                    </div>   
                    <hr>
                         <h5 class="text-center bg-secondary form-control">Not Achieved Yet</h5>
                         
                        </a>
                    
            </div>
           
          </div>

          {{-- END OF FIRST COL --}}
          <div class="col-md-1"></div>
          <div class="col-md-5">
            <div class="card ">
                <a href="#">  
                     <div class="card-header bg-secondary">
                <h5 class="m-0">ROYAL AMBASSADOR</h5>
                    </div>
                    <div class="card-body ">

                      <img src="{{asset('assets/a/dist/img/avatar2.png')}}"
                      alt="Product Image" height="120px" width="100%">
                          
                    </div>   
                    <hr>
                         <h5 class="text-center bg-secondary form-control">Not Achieved Yet</h5>
                         
                        </a>
                    
            </div>
           
          </div>
         </div>

         <div class="row">
          <div class="col-md-5">
            <div class="card ">
                <a href="#">  
                     <div class="card-header bg-secondary">
                <h5 class="m-0">CROWN DIAMONDS</h5>
                    </div>
                    <div class="card-body ">

                      <img src="{{asset('assets/a/dist/img/avatar2.png')}}"
                      alt="Product Image" height="120px" width="100%">
                          
                    </div>   
                    <hr>
                         <h5 class="text-center bg-secondary form-control">Not Achieved Yet</h5>
                         
                        </a>
                    
            </div>
           
          </div>

          {{-- END OF FIRST COL --}}
          <div class="col-md-1"></div>
          <div class="col-md-5">
            <div class="card ">
                <a href="#">  
                     <div class="card-header bg-secondary">
                <h5 class="m-0">BLACK DIAMONDS</h5>
                    </div>
                    <div class="card-body ">

                      <img src="{{asset('assets/a/dist/img/avatar2.png')}}"
                      alt="Product Image" height="120px" width="100%">
                          
                    </div>   
                    <hr>
                         <h5 class="text-center bg-secondary form-control">Not Achieved Yet</h5>
                         
                        </a>
                    
            </div>
           
          </div>
         </div>
       
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
    <!-- /.row -->

  </div>



@endsection