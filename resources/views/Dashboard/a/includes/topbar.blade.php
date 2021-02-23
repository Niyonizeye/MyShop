<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Muhahe Affiliate</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{asset('assets/a/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('assets/a/dist/css/adminlte.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/a/dist/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/a/dist/css/tree_style.css')}}">
  <link rel="stylesheet" href="{{asset('assets/a/plugins/fontawesome-free/css/all.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/a/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/a/dist/css/adminlte.min.css')}}">


    <link rel="stylesheet" href="{{asset('assets/a/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
    <link rel="icon" href="{{asset('assets/a/img/log1.png')}}">


  
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
 <!-- Navbar -->
 
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      
    </ul>

   

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">


        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button"> <div class="user-panel">
       
          <img src="{{asset('assets/a/img/johndoe.jpg')}}" class="img-circle elevation-2" alt="User Image">
       
          Mr Doe
      
      </div></a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->
     
       @yield('content')
     
  <!-- REQUIRED SCRIPTS -->
</div>

<aside class="control-sidebar control-sidebar-dark">
  <!-- Control sidsbar content goes here -->
<center>
    <div class="p-2">
    <h3 id="prof">Profile</h3>
    <p>  <i class="fas fa-bitcoin mr-2"></i><a href="">Payments</a></p>
    <p>  <i class="fas fa-cog mr-2"></i> <a href="">Settings</a></p>   
    <hr id="hrs">  

    <p><i class="fas fa-logout mr-2"></i> <a href="">Need Help</a></p>
    <p> <a href="">Log Out</a></p>  
     </div>
</center>
</aside>
<!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy;2020 <a href="https://muhahe.com">Muhahe Ltd</a>.</strong> All rights reserved.
  </footer>
<!-- jQuery -->

<script src="{{asset('assets/a/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('assets/a/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('assets/a/dist/js/adminlte.min.js')}}"></script>
<script src="{{asset('assets/a/plugins/chart.js/Chart.min.js')}}"></script>
<script src="{{asset('assets/a/dist/js/pages/dashboard2.js')}}"></script>
<script src="{{asset('assets/a/dist/js/tree.js')}}"></script>
<script src="{{asset('assets/a/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<script src="{{asset('assets/a/plugins/chart.js/Chart.min.js')}}"></script>
<script src="{{asset('assets/a/plugins/jquery-knob/jquery.knob.min.js')}}"></script>

<script src="{{asset('assets/a/dist/js/pages/dashboard.js')}}"></script>
<script src="{{asset('assets/a/plugins/summernote/summernote-bs4.min.js')}}"></script>
<script src="{{asset('assets/a/plugins/daterangepicker/daterangepicker.js')}}"></script>
<script src="{{asset('assets/a/plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('assets/a/dist/js/pages/dashboard3.js')}}"></script>



</body>
</html>
