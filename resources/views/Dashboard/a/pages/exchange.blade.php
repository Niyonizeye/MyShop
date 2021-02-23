@extends('Dashboard/a/includes/topbar') 

@section('content')
@include('Dashboard/a/includes/leftbar')



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <ul class="nav nav-tabs">
          <li class="active" ><a  href="{{route('exchange')}}">Exchange</a></li>
          <li  ><a  href="{{route('open_orders')}}">My Open Orders</a></li>
          <li ><a  href="{{route('transaction_history')}}">My transaction history</a></li>

        </ul>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container">
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

        {{-- end of row --}}

        <div class="row">
            <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                  <div class="card-title">
                    BUY DAGCOINS
                  </div>
              </div>
               <div class="card-body">
                   <label for="quantity">Quantity:</label>
                   <input type="text" class="form-control">
                   <label for="price">Price:</label>
                   <input type="text" class="form-control">
                   <label for="total">Total:</label>
                   <input type="text" class="form-control">
                   <br>
                   <div class="btn btn-warning">Buy</div>
               </div>
            </div>
        </div>
        {{-- END OF COLUMN --}}
        <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                  <div class="card-title">
                    SELL DAGCOINS
                  </div>
              </div>
               <div class="card-body">
                   <label for="quantity">Quantity:</label>
                   <input type="text" class="form-control">
                   <label for="price">Price:</label>
                   <input type="text" class="form-control">
                   <label for="total">Total:</label>
                   <input type="text" class="form-control">
                   <br>
                   <div class="btn btn-success">Sell</div>
               </div>
            </div>
        </div>
    </div>

    {{-- END OF ROW --}}
    
    <div class="row">
        <div class="col-md-6">
            <div class="card card-warning">
              <div class="card-header">
                  <div class="card-title">
                    SELL DAGCOINS
                  </div>
              </div>
               <div class="card-body">
                   <table class="table">
                       <thead>
                        <th>PRICE OF 1 DAGCOIN</th>
                        <th>QUANTITY</th>
                        <th>TOTAL</th>
                       </thead>
                       <tbody>
                           <tr class="warning">
                               <td>0.62</td>
                               <td>11 509 038.49 </td>
                               <td>7 135 603.86 </td>
                           </tr>
                       </tbody>
                   </table>
               </div>
            </div>
        </div>
    {{-- END OF COLUMN --}}
    <div class="col-md-6">
        <div class="card card-success">
          <div class="card-header">
              <div class="card-title">
                BUY DAGCOINS
              </div>
          </div>
           <div class="card-body">
               <table class="table">
                   <thead>
                    <th>PRICE OF 1 DAGCOIN</th>
                    <th>QUANTITY</th>
                    <th>TOTAL</th>
                   </thead>
                   <tbody>
                       <tr class="warning">
                           <td>0.62</td>
                           <td>11 509 038.49 </td>
                           <td>7 135 603.86 </td>
                       </tr>
                   </tbody>
               </table>
           </div>
        </div>
    </div>
</div>
{{-- END OF ROW --}}
<div class="row">
    <div class="col-md-12">
        <div class="card card-secondary">
          <div class="card-header">
              <div class="card-title">
                HISTORY
              </div>
          </div>
           <div class="card-body">
               <table class="table">
                   <thead>
                    <th>PRICE OF 1 DAGCOIN</th>
                    <th>QUANTITY</th>
                    <th>TOTAL</th>
                    <th>DATE</th>
                   </thead>
                   <tbody>
                       <tr class="warning">
                           <td>0.62</td>
                           <td>11 509 038.49 </td>
                           <td>7 135 603.86 </td>
                           <td>20/08/2020</td>
                       </tr>
                       <tr class="warning">
                        <td>0.62</td>
                        <td>11 509 038.49 </td>
                        <td>7 135 603.86 </td>
                        <td>20/08/2020</td>
                    </tr>
                    <tr class="warning">
                        <td>0.62</td>
                        <td>11 509 038.49 </td>
                        <td>7 135 603.86 </td>
                        <td>20/08/2020</td>
                    </tr>
                    <tr class="warning">
                        <td>0.62</td>
                        <td>11 509 038.49 </td>
                        <td>7 135 603.86 </td>
                        <td>20/08/2020</td>
                    </tr>
                    <tr class="warning">
                        <td>0.62</td>
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