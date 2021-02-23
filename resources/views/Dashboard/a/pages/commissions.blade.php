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
            <li class="active"><a  href="{{route('commissions')}}">Commissions</a></li>
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
      <strong><i>65% of commissions goes to Cash Account and 35% goes to Trading Account.</i></strong>
       <br><br>
      <div class="row"> 
      
        <div class="card col-md-6">
        
            <center>
            <div class="row">
                <div class="col-md-7">
                    <h1>0.00 <i style="color: brown;font-size:16px;">EUR</i></h1>

                </div>
            </div>
            <h6>TRADING ACCOUNT BALANCE</h6>
        </center>
        </div>
     
       <!-- END OF cl -->
       <div class="card col-md-6">
        
        <center>
        <div class="row">
            <div class="col-md-7">
                <h1>0.00 <i style="color: brown;font-size:16px;">EUR</i></h1>

            </div>
        </div>
        <h6>FREE DAGCOIN</h6>
    </center>
    </div>

<!-- END OF cl -->
    </div>
    <div class="row">
            
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
              <div class="card-title">
                MY TRANSACTION HISTORY
              </div>
          </div>
           <div class="card-body">
               <table class="table">
                   <thead>
                    <th>TYPE</th>
                    <th>QUANTITY</th>
                    <th>TOTAL</th>
                    <th>DATE</th>
                   </thead>
                   <tbody>
                       <tr class="warning">
                           <td>Purchase order</td>
                           <td>11 509 038.49 </td>
                           <td>7 135 603.86 </td>
                           <td>20/08/2020</td>
                       </tr>
                       <tr class="warning">
                        <td>Purchase order</td>
                        <td>11 509 038.49 </td>
                        <td>7 135 603.86 </td>
                        <td>20/08/2020</td>
                    </tr>
                    <tr class="warning">
                        <td>Purchase order</td>
                        <td>11 509 038.49 </td>
                        <td>7 135 603.86 </td>
                        <td>20/08/2020</td>
                    </tr>
                    <tr class="warning">
                        <td>Purchase order</td>
                        <td>11 509 038.49 </td>
                        <td>7 135 603.86 </td>
                        <td>20/08/2020</td>
                    </tr>
                    <tr class="warning">
                        <td>Purchase order</td>
                        <td>33 209 938.49 </td>
                        <td>7 135 603.86 </td>
                        <td>24/10/2019</td>
                    </tr>
                   </tbody>
               </table>
           </div>
        </div>
    </div>
    </div>

    {{-- end of row --}}
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
    <!-- /.row -->

  </div>



@endsection