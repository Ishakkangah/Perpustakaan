
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
      <img src="{{ asset('img/logo2.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-bold font-weight-light">Per<span class="text-danger">pustakaan</span></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      @auth
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <a href="{{ route('user.profile') }}"><img src="{{ asset('img/Default2.png')}}" class="img-circle elevation-2" alt="User Image"></a>
        </div>
        <div class="info">
          <a href="{{ route('user.profile') }}" class="d-block">{{ auth()->user()->name }}</a>
        </div>
      </div>
      @endauth

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="/" class="nav-link {{ request()->is('/') ? 'active' : '' }}">
              <i class="nav-icon fas fa-desktop"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          
          @role('super admin')
          <li class="nav-item">
            <a  href="#" class="nav-link {{ request()->is('#') ? 'active' : '' }}">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Master data
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item {{ request()->is('buku/index') ? 'active' : '' }}">
                <a href="{{ route('user.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Users</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item {{ request()->is('buku/index') ? 'active' : '' }}">
                <a href="{{ route('register') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add users</p>
                </a>
              </li>
            </ul>
          </li>
          @endrole
          
          <li class="nav-item">
            <a  href="#" class="nav-link {{ request()->is('#') ? 'active' : '' }}">
              <i class="nav-icon fas fa-swatchbook"></i>
              <p>
                Books
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item {{ request()->is('buku/index') ? 'active' : '' }}">
                <a href="{{ route('buku.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>List books</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item {{ request()->is('category/table') ? 'active' : '' }}">
                <a href="{{ route('category.table') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Categories</p>
                </a>
              </li>
            </ul>
          </li>

          @auth
          <li class="nav-item">
            <a href="{{ route('member.index') }}" class="nav-link {{ request()->is('member/index') ? 'active' : '' }}">
              <i class="nav-icon fas fa-id-card"></i>
              <p>
                Members
              </p>
            </a>
          </li>
          @endauth
          @auth
          <li class="nav-item">
            <a href="{{ route('transaksi.index') }}" class="nav-link {{ request()->is('transaksi/index') ? 'active' : '' }}">
              <i class="nav-icon fas fa-fax"></i>
              <p>
                Transactions
              </p>
            </a>
          </li>
          @endauth
          @auth
          <li class="nav-item">
            <a href="{{ route('logout') }}" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Logout
              </p>
            </a>
          </li>
          @endauth
        </ul>
      </nav>
    </div>
  </aside>