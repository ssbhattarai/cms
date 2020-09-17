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
      {{-- {{ (Request::is('admin/dashboard') || Request::is('/admin/dashboard')) ? ' class="active"' : '' }} --}}
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="/admin" class="nav-link {{ (Request::is('admin') || Request::is('/admin')) ? 'active' : '' }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
              Dashboard
                {{-- <span class="right badge badge-danger">New</span> --}}
              </p>
            </a>
          </li>
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview {{ (Request::is('admin/user')) || (Request::is('admin/user/create'))  ? 'menu-open' : '' }}">
            <a href="#" class="nav-link {{ (Request::is('admin/user')) || (Request::is('admin/user/create'))  ? 'active' : '' }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Users
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/admin/user" class="nav-link  {{ (Request::is('admin/user')) ? 'active' : '' }}">
                  <i class="far fa-user nav-icon"></i>
                  <p>Users</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="/admin/user/create" class="nav-link  {{ (Request::is('/admin/user/create')) ? 'active' : '' }}">
                  <i class="far fa-user nav-icon"></i>
                  <p>Create User</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview {{ (Request::is('admin/roles')) || (Request::is('admin/roles/create'))  ? 'menu-open' : '' }}">
            <a href="#" class="nav-link">
            <img src="{{ asset('icons/role.png')}}" class="nav-icon" alt="role">
              <p>
                Roles
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/admin/roles" class="nav-link  {{ (Request::is('admin/roles')) ? 'active' : '' }}">
                  <img src="{{ asset('icons/role.png')}}" class="nav-icon" alt="role">
                  <p>Roles</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="/admin/roles/create" class="nav-link  {{ (Request::is('admin/roles/create')) ? 'active' : '' }}">
                  <i class="fa fa-plus nav-icon"></i>
                  <p>Create Roles</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="/admin/students" class="nav-link  {{ (Request::is('admin/students')) || (Request::is('admin/students/create')) ? 'active' : '' }}">
              <i class="nav-icon fa fa-graduation-cap" aria-hidden="true"></i>
              <p>
                Students
              </p>
            </a>
          </li>
          <li class="nav-item">
          <a href="/admin/logs" class="nav-link {{ Request::is('admin/logs') ? 'active' : ''}}">
              <i class="nav-icon fas fa-history"></i>
              <p>
                Application Log
                {{-- <span class="right badge badge-danger">New</span> --}}
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