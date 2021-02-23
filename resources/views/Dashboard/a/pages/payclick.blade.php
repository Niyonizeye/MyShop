@extends('Dashboard/a/includes/topbar') 
@section('content')
@include('Dashboard/a/includes/leftbar')



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <ul class="nav nav-tabs">
          <li class="active"><a  href="{{route('payclick')}}">Pay clicks</a></li>
        <li><a  href="{{route('advertisment')}}">Advertismet</a></li>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
      
        <div class="row">
            
            <div class="col-md-3">
            <div class="card card-primary card-outline">
            <a href="{{route('adclick_page')}}">  
                     <div class="card-header">
                <h5 class="m-0">In 10 Secs</h5>
                    </div>
                    <div class="card-body click-title">

                        <h6 class="card-title ">
                            <img src="{{asset('assets/a/img/johndoe.jpg')}}" class="img-circle click-img" alt="click adds">
                            
                            Click Here!!</h6>
                          
                    </div>   
                    <hr>
                         <h5 class="text-center">Earn 0.004 $</h5>
                         
                        </a>
                    
            </div>
           
          </div>
           <!-- END OF click column -->
           <div class="col-md-3">
            <div class="card card-primary card-outline">
                <a href="#">  
                     <div class="card-header">
                <h5 class="m-0">In 10 Secs</h5>
                    </div>
                    <div class="card-body click-title">

                        <h6 class="card-title ">
                            <img src="{{asset('assets/a/img/johndoe.jpg')}}" class="img-circle click-img" alt="click adds">
                            
                            Click Here!!</h6>
                          
                    </div>   
                    <hr>
                         <h5 class="text-center">Earn 0.004 $</h5>
                         
                        </a>
                    
            </div>
           
          </div>
           <!-- END OF click column -->
           <div class="col-md-3">
            <div class="card card-primary card-outline">
                <a href="#">  
                     <div class="card-header">
                <h5 class="m-0">In 10 Secs</h5>
                    </div>
                    <div class="card-body click-title">

                        <h6 class="card-title ">
                            <img src="{{asset('assets/a/img/johndoe.jpg')}}" class="img-circle click-img" alt="click adds">
                            
                            Click Here!!</h6>
                          
                    </div>   
                    <hr>
                         <h5 class="text-center">Earn 0.004 $</h5>
                         
                        </a>
                    
            </div>
           
          </div>
           <!-- END OF click column -->
           <div class="col-md-3">
            <div class="card card-primary card-outline">
                <a href="#">  
                     <div class="card-header">
                <h5 class="m-0">In 10 Secs</h5>
                    </div>
                    <div class="card-body click-title">

                        <h6 class="card-title ">
                            <img src="{{asset('assets/a/img/johndoe.jpg')}}" id="image" class="img-circle click-img" alt="click adds">
                            
                            Click Here!!</h6>
                          
                    </div>   
                    <hr>
                         <h5 class="text-center" id="earn">Earn 0.004 $</h5>
                         
                        </a>
                    
            </div>
           
          </div>
           <!-- END OF click column -->

           
        </div>
        <!-- /.row -->
        
        <div class="row">
            
            <div class="col-md-3">
            <div class="card card-primary card-outline">
                <a href="#">  
                     <div class="card-header">
                <h5 class="m-0">In 10 Secs</h5>
                    </div>
                    <div class="card-body click-title">

                        <h6 class="card-title ">
                            <img src="{{asset('assets/a/img/johndoe.jpg')}}" class="img-circle click-img" alt="click adds">
                            
                            Click Here!!</h6>
                          
                    </div>   
                    <hr>
                         <h5 class="text-center">Earn 0.004 $</h5>
                         
                        </a>
                    
            </div>
           
          </div>
           <!-- END OF click column -->
           <div class="col-md-3">
            <div class="card card-primary card-outline">
                <a href="#">  
                     <div class="card-header">
                <h5 class="m-0">In 10 Secs</h5>
                    </div>
                    <div class="card-body click-title">

                        <h6 class="card-title ">
                            <img src="{{asset('assets/a/img/johndoe.jpg')}}" class="img-circle click-img" alt="click adds">
                            
                            Click Here!!</h6>
                          
                    </div>   
                    <hr>
                         <h5 class="text-center">Earn 0.004 $</h5>
                         
                        </a>
                    
            </div>
           
          </div>
           <!-- END OF click column -->
           <div class="col-md-3">
            <div class="card card-primary card-outline">
                <a href="#">  
                     <div class="card-header">
                <h5 class="m-0">In 10 Secs</h5>
                    </div>
                    <div class="card-body click-title">

                        <h6 class="card-title ">
                            <img src="{{asset('assets/a/img/johndoe.jpg')}}" class="img-circle click-img" alt="click adds">
                            
                            Click Here!!</h6>
                          
                    </div>   
                    <hr>
                         <h5 class="text-center">Earn 0.004 $</h5>
                         
                        </a>
                    
            </div>
           
          </div>
           <!-- END OF click column -->
           <div class="col-md-3">
            <div class="card card-primary card-outline">
                <a href="#">  
                     <div class="card-header">
                <h5 class="m-0">In 10 Secs</h5>
                    </div>
                    <div class="card-body click-title">

                        <h6 class="card-title ">
                            <img src="{{asset('assets/a/img/johndoe.jpg')}}" id="image" class="img-circle click-img" alt="click adds">
                            
                            Click Here!!</h6>
                          
                    </div>   
                    <hr>
                         <h5 class="text-center" id="earn">Earn 0.004 $</h5>
                         
                        </a>
                    
            </div>
           
          </div>
           <!-- END OF click column -->

           
        </div>
        <!-- /.row -->
  
          <!-- Main row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
    <!-- /.row -->

  </div>



@endsection