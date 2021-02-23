
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-info elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset('assets/a/img/log1.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">MUHAHE</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('assets/a/img/johndoe.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Mr JohnDoe</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column nav-fixed" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                    <li class="nav-item has-treeview ">
            <a href="{{route('dashboard')}}" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
               <p>
                Dashboard
              </p>
              </p>
            </a>
           
          </li>

          <!-- End of nav-item -->
          <li class="nav-item has-treeview ">
          <a href="{{route('payclick')}}" class="nav-link">
              <i class="nav-icon fas fa-share"></i>
              <p>
               <p>
                Fear Loss
              </p>
               
              </p>
            </a>
           
          </li>

          <!-- End of nav-item -->

            <li class="nav-item has-treeview">
            <a href="{{route('balance')}}" class="nav-link">
              <i class="nav-icon fas fa-signal"></i>
              <p>
               Balance
              </p>
            </a>
          </li>

          <!-- End of nav-item -->
          
          <li class="nav-item has-treeview">
            <a href="{{route('payments')}}" class="nav-link">
              <i class="nav-icon fas fa-road"></i>
              <p>
               Payments
              </p>
            </a>
          </li>

          <!-- End of nav-item -->
          <li class="nav-item has-treeview">
            <a href="{{route('packages_list')}}" class="nav-link">
              <i class="nav-icon fas fa-star"></i>
              <p>
               Upgrade Package
              </p>
            </a>
          </li>

          <!-- End of nav-item -->


            <li class="nav-item has-treeview">
            <a href="{{route('team_structure')}}" class="nav-link ">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Team Building
               
              </p>
            </a>
         
          </li>

          <!-- End of nav-item -->

            <li class="nav-item has-treeview">
            <a href="{{route('education_pdf')}}" class="nav-link ">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Education
              </p>
            </a>
         
          </li>

          <!-- End of nav-item -->

            <li class="nav-item has-treeview">
            <a href="{{route('exchange')}}" class="nav-link ">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Exchange
              </p>
            </a>
          </li>

          {{-- <!-- End of nav-item -->
          <li class="nav-item has-treeview">
            <a href="{{route('marchants')}}" class="nav-link ">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Marchants
              </p>
            </a>
          </li> --}}

          <!-- End of nav-item -->

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-plus"></i>
              <p>
                Products
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview" style="background-color: blanchedalmond">
              <li class="nav-item">
                <a href="www.muhahe.com" class="nav-link">
                  <i class="fas fa-shopping-cart nav-icon" style="color: black"></i>
                  <p style="color: black">Our Shop</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="www.booking.muhahe.com" class="nav-link">
                  <i class="fas fa-home nav-icon" style="color: black"></i>
                  <p style="color: black">Our Booking</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('product')}}" class="nav-link">
                  <i class="far fa-circle nav-icon" style="color: black"></i>
                  <p style="color: black">Other Products</p>
                </a>
              </li>
            </ul>
          </li> <!-- End of nav-item -->

            <li class="nav-item">
            <a href="{{route('refer_earn')}}" class="nav-link ">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Refer & Earn
              </p>
            </a>
            
          </li>

          <!-- End of nav-item -->
          <li class="nav-item">
          <a href="{{route('account')}}" class="nav-link">
              <i class="nav-icon fas fa-cog"></i>
              <p>
                Profile Settings
                <span class="right badge badge-success">New</span>
              </p>
            </a>
          </li>
{{-- END FO PROFILE SETTINGS --}}
<li class="nav-item">
  <a href="{{route('faq')}}" class="nav-link">
      <i class="nav-icon fas fa-cog"></i>
      <p>
       FAQ
       
      </p>
    </a>
  </li>
        </ul>
      </nav><br><br>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>