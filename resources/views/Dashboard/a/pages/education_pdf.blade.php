@extends('Dashboard/a/includes/topbar') 

@section('content')
@include('Dashboard/a/includes/leftbar')



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <ul class="nav nav-tabs">
          <li class="active" ><a  href="{{route('education_pdf')}}">PDF</a></li>
          <li ><a  href="{{route('education_tutorial')}}">Tutorials</a></li>


        </ul>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
      <br>
        <div class="row">
            
            <div class="col-md-4">
            <div class="card">
             
              <div class="card-body">
                <center>
                  <img src="{{asset('assets/a/dist/img/avatar2.png')}}"
                   alt="Product Image" height="100px">
                <hr>
                <h4 >Beginners</h4>
            
                <br>
                <div class="row">
                  <div class="col-md-8">
                   <i><h6>Course 1:</h6></i>
                  </div>
                  <a href="#"><h2 class="fas fa-download"></h2></a>

                 
                </div>  </center>

              </div>
            </div>
           
          </div>
          
           
           <!-- END OF cl -->

               
           <div class="col-md-4">
            <div class="card">
             
              <div class="card-body">
                <center>
                  <img src="{{asset('assets/a/dist/img/avatar3.png')}}"
                   alt="Product Image" height="100px">
                <hr>
                <h4 >Beginners</h4>
            
                <br>
                <div class="row">
                  <div class="col-md-8">
                   <i><h6>Course 2:</h6></i>
                   
                  </div>                  <a href="#"><h2 class="fas fa-download"></h2></a>

                </center>
                 
                </div>

              </div>
            </div>
            <div class="col-md-4">
              <div class="card">
               
                <div class="card-body">
                  <center>
                    <img src="{{asset('assets/a/dist/img/avatar5.png')}}"
                     alt="Product Image" height="100px">
                      
                  <hr>
                  <h4 >Beginners</h4>
                </center>
                  <br>
                  <div class="row">
                    <div class="col-md-8">
                     <i><h6>Course 3:</h6></i>
                    </div><a href="#"><h2 class="fas fa-download"></h2></a>
                </center>
                    
                  </div>
  
                </div>
              </div>
             
            </div>
           
          </div>
          
           
           <!-- END OF 1st Row -->

               
          
          
           
           <!-- END OF cl -->
       

        <div class="row">
            
          <div class="col-md-4">
          <div class="card">
           
            <div class="card-body">
              <center>
                <img src="{{asset('assets/a/dist/img/avatar2.png')}}"
                 alt="Product Image" height="100px">
              <hr>
              <h4 >Explorer</h4>
        
              <br>
              <div class="row">
                <div class="col-md-8">
                 <i><h6>Course 1:</h6></i>
                </div> <a href="#"><h2 class="fas fa-download"></h2></a>

            </center>
               
              </div>

            </div>
          </div>
              
         <div class="col-md-4">
          <div class="card">
           
            <div class="card-body">
              <center>
                <img src="{{asset('assets/a/dist/img/avatar3.png')}}"
                 alt="Product Image" height="100px">
          
              <hr>
              <h4 >Advanced</h4>
          
              <br>
              <div class="row">
                <div class="col-md-8">
                 <i><h6>Course 1:</h6></i>
                </div><a href="#"><h2 class="fas fa-download"></h2></a>

            </center>
               
              </div>

            </div>
          </div>

          <div class="col-md-4">
            <div class="card">
             
              <div class="card-body">
                <center>
                  <img src="{{asset('assets/a/dist/img/gif1.gif')}}"
                   alt="Product Image" height="100px">
                  
                <hr>
                <h4 >Expert</h4>
             
                <br>
                <div class="row">
                  <div class="col-md-8">
                   <i><h6>Course 1:</h6></i>
                  </div><a href="#"><h2 class="fas fa-download"></h2></a>

                </center>
                 
                </div>
  
              </div>
            </div>
         
        </div>
        
         
         <!-- END OF cl -->

         
         
        </div>
        
         
         <!-- END OF cl -->

             
       
         
        </div>
        
         
         <!-- END OF cl -->
      </div>
       
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
    <!-- /.row -->

  </div>



@endsection