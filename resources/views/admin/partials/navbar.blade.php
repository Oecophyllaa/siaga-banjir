<header id="header" class="header">
  <div class="top-left">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"><img src="{{ asset('admin/images/logo-dark.png') }}" alt="Logo"></a>
      <a class="navbar-brand hidden" href="#"><img src="{{ asset('admin/images/logo-dark.png') }}" alt="Logo"></a>
      <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
    </div>
  </div>
  <div class="top-right">
    <div class="header-menu">

      <div class="user-area dropdown float-right">
        <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <img class="user-avatar rounded-circle" src="{{ asset('admin/images/avatar/2.jpg') }}" alt="User Avatar">
        </a>

        <!-- user-menu -->
        <div class="user-menu dropdown-menu">
          <a class="nav-link" href="#"><i class="fa fa-user"></i>My Profile</a>

          <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <i class="fa fa-power-off"></i>Logout
          </a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
          </form>
        </div>
      </div>

    </div>
  </div>
</header>
