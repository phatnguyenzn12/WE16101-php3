{{-- @dump($loggedInUser) --}}
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{ asset('adminlte') }}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('adminlte') }}/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{Auth::user()->name}}</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item ">
            {{-- <li class="nav-item menu-open"> --}}
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          @foreach ($custom_menu as $item)
          <li class="nav-item">
            <a href="#" class="nav-link">
              @isset($item['icon'])
                  {!! $item['icon'] !!}
              @else
                <i class="fas fa-truck-moving"></i>
              @endisset
              
              <p>
                {{$item['name']}}
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            @isset($item['child'])
            <ul class="nav nav-treeview">
              @foreach ($item['child'] as $sub_item)
              <li class="nav-item">
                <a href="{{url($sub_item['url'])}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>{{$sub_item['name']}}</p>
                </a>
              </li>
              @endforeach
            </ul>
            @endisset
          </li>
          @endforeach
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>