@extends('Dashboard/a/includes/topbar') 

@section('content')
@include('Dashboard/a/includes/leftbar')



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <ul class="nav nav-tabs">
          <li ><a  href="{{route('exchange')}}">Exchange</a></li>
          <li  ><a  href="{{route('open_orders')}}">My Open Orders</a></li>
          <li class="active" ><a  href="{{route('transaction_history')}}">My transaction history</a></li>

        </ul>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
      
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
                            <td>11 509 038.49 </td>
                            <td>7 135 603.86 </td>
                            <td>20/08/2020</td>
                        </tr>
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