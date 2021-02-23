
@extends('Dashboard/a/includes/topbar') 
@section('content')
@include('Dashboard/a/includes/leftbar')



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
 <!-- Content Header (Page header) -->
 <div class="content-header">
  <div class="container-fluid">
    <ul class="nav nav-tabs">
      <li class="active"><a  href="{{route('team_structure')}}">Team Structure</a></li>
      <li><a  href="{{route('my_awards')}}">My Awards</a></li>
      <li><a  href="{{route('commissions')}}">Commissions</a></li>
      <li><a  href="{{route('view_points')}}">View Points</a></li>
      <li><a  href="{{route('ranking')}}">Ranking</a></li>

    </ul>
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
     <div class="container-fluid">
      <div class="row">
            
        <div class="col-md-6">
        <div class="card card-primary card-leftline">
          <div class="card-header">
            <a href="#" >
            <h5 class="m-0"><i class="fas fa-users"></i> Left Team</h5>
          </div>
          <div class="card-body">
            <div class="card ">
             <div class="card-body">
                   <h2>Members:</h2>
                <center><h1>31</h1></center>
                <div class="btn btn-success" id="button_treel">View List</div>
                
              </div>
            </div>
            <div class="" id="toggle_treel"><div class="row">
              <div class="col-md-12">
                 <h3><span class="fas fa-user"></span>Umukire John</h3>
                  <ol class="tree-structure">
                        <li>
                           <span class="num">1</span>
                           <a href="#">Kamanzi Aime </a>
                           <ol>
                              <li>
                                 <span class="num">1.1</span>
                                 <a href="#">Uwimana Paul</a>
                              </li>
                              <li>
                                 <span class="num">1.2</span>
                                 <a href="#">Ndahayo Jean</a>
                              </li>
                              <li>
                                 <span class="num">1.3</span>
                                 <a href="#">Kabarugira jack</a>
                              </li>
                              <li>
                                 <span class="num">1.4</span>
                                 <a href="#">Simusiga Simeon</a>
                              </li>
                           </ol>
                        </li>
                        <li>
                           <span class="num">2</span>
                           <a href="#">Muhawe Jeanne</a>
                           <ol>
                              <li>
                                 <span class="num">2.1</span>
                                 <a href="#">Habukugize Claude </a>
                              </li>
                              <li>
                                 <span class="num">2.2</span>
                                 <a href="#">Shingiro Samson </a>
                              </li>
                              <li>
                                 <span class="num">2.3</span>
                                 <a href="#">Johnson Bagore</a>
                              </li>
                              <li>
                                 <span class="num">2.4</span>
                                 <a href="#">Hirwa Balthremeo</a>
                              </li>
                           </ol>
                        </li>
                        <li>
                           <span class="num">3</span>
                           <a href="#">Sonia Ribagiza</a>
                           <ol>
                              <li>
                                 <span class="num">3.1</span>
                                 <a href="#">Keza Delice </a>
                              </li>
                              <li>
                                 <span class="num">3.2</span>
                                 <a href="#">Sahayo Didas</a>
                              </li>
                              <li>
                                 <span class="num">3.3</span>
                                 <a href="#">Muhirwa Jovan</a>
                              </li>
                              <li>
                                 <span class="num">3.2</span>
                                 <a href="#">Manzi Thierry</a>
                              </li>
                           </ol>
                        </li>
                     </ol>
              </div>
            </div>
          
              </div>
        </div>
        </a>
        </div>
       
      </div>
       <!-- END OF cl -->
        
    
        
       <div class="col-md-6">
        <div class="card card-warning card-leftline">
          <div class="card-header">
            <a href="#" >
            <h5 class="m-0"><i class="fas fa-users"></i> Right Team</h5>
          </div>
          <div class="card-body">
            <div class="card ">
             <div class="card-body">
                   <h2>Members:</h2>
                <center><h1>20</h1></center>
               <div class="btn btn-success" id="button_treer">View List</div>
                
              </div>
           
            </div>

            <div class="" id="toggle_treer"><div class="row">
              <div class="col-md-12">
                <span class="fas fa-user"></span> <h3>Umukire John</h3>
                  <ol class="tree-structure">
                        <li>
                           <span class="num">1</span>
                           <a href="#">Kamanzi Aime </a>
                           <ol>
                              <li>
                                 <span class="num">1.1</span>
                                 <a href="#">Uwimana Paul</a>
                              </li>
                              <li>
                                 <span class="num">1.2</span>
                                 <a href="#">Ndahayo Jean</a>
                              </li>
                              <li>
                                 <span class="num">1.3</span>
                                 <a href="#">Kabarugira jack</a>
                              </li>
                              <li>
                                 <span class="num">1.4</span>
                                 <a href="#">Simusiga Simeon</a>
                              </li>
                           </ol>
                        </li>
                        <li>
                           <span class="num">2</span>
                           <a href="#">Muhawe Jeanne</a>
                           <ol>
                              <li>
                                 <span class="num">2.1</span>
                                 <a href="#">Habukugize Claude </a>
                              </li>
                              <li>
                                 <span class="num">2.2</span>
                                 <a href="#">Shingiro Samson </a>
                              </li>
                              <li>
                                 <span class="num">2.3</span>
                                 <a href="#">Johnson Bagore</a>
                              </li>
                              <li>
                                 <span class="num">2.4</span>
                                 <a href="#">Hirwa Balthremeo</a>
                              </li>
                           </ol>
                        </li>
                        <li>
                           <span class="num">3</span>
                           <a href="#">Sonia Ribagiza</a>
                           <ol>
                              <li>
                                 <span class="num">3.1</span>
                                 <a href="#">Keza Delice </a>
                              </li>
                              <li>
                                 <span class="num">3.2</span>
                                 <a href="#">Sahayo Didas</a>
                              </li>
                              <li>
                                 <span class="num">3.3</span>
                                 <a href="#">Muhirwa Jovan</a>
                              </li>
                              <li>
                                 <span class="num">3.2</span>
                                 <a href="#">Manzi Thierry</a>
                              </li>
                           </ol>
                        </li>
                     </ol>
              </div>
            </div>
          
              </div>
        </div>
        </a>
        </div>
       
      </div>
   
    </div>
    <!-- /.row -->
     </div>
    </div>
    <!-- /.content -->
    <!-- /.row -->

  </div>



@endsection

<script src="{{asset('assets/a/dist/js/tree.js')}}"></script>
