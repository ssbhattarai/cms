<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/admin" class="brand-link">
      <img src="https://image.flaticon.com/icons/svg/2111/2111463.svg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light text-uppercase">College</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="https://image.flaticon.com/icons/svg/1077/1077012.svg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info text-white font-weight-bold">{{ Auth::user()->name }}
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Users
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/admin/user" class="nav-link">
                  <i class="far fa-user nav-icon"></i>
                  <p>Users</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="/admin/user/create" class="nav-link">
                  <i class="far fa-user nav-icon"></i>
                  <p>Create User</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
            <img src="{{ asset('icons/role.png')}}" class="nav-icon" alt="role">
              <p>
                Roles
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/admin/roles" class="nav-link">
                  <img src="{{ asset('icons/role.png')}}" class="nav-icon" alt="role">
                  <p>Roles</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="/admin/roles/create" class="nav-link">
                  <i class="fa fa-plus nav-icon"></i>
                  <p>Create Roles</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="/admin/students" class="nav-link">
              <i class="nav-icon fa fa-graduation-cap" aria-hidden="true"></i>
              <p>
                Students
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="pages/widgets.html" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Log
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
         
          <li class="nav-header">Frontend Website</li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="fa fa-home nav-icon" aria-hidden="true"></i>
              <p>
                Home Page
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/admin/sliderimage" class="nav-link">
                  <i class="fas fa-sliders-h nav-icon"></i>
                  <p>Top Slider</p>
                </a>
              </li>

              <li class="nav-item">
                {{-- <a href="/admin/user/create" class="nav-link">
                  <i class="far fa-user nav-icon"></i>
                  <p>Create User</p>
                </a> --}}
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="/admin/about-us" class="nav-link">
              <i class="nav-icon fas fa-address-card"></i>
              <p>
                About Us
              </p>
            </a>
          </li>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>