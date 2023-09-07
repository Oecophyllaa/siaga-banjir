<aside id="left-panel" class="left-panel">
  <nav class="navbar navbar-expand-sm navbar-default">
    <div id="main-menu" class="main-menu collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li class="{{ Request::segment(2) === 'dashboard' ? 'active' : '' }}">
          <a href="{{ route('admin.dashboard') }}"><i class="menu-icon fa fa-th-large"></i>Dashboard </a>
        </li>
        <li class="menu-title">Media Informasi</li><!-- /.menu-title -->
        <li class="menu-item-has-children dropdown {{ Request::segment(2) === 'infografik' ? 'active' : '' }}">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="menu-icon fa fa-folder"></i>Media
          </a>
          <ul class="sub-menu children dropdown-menu">
            <li><i class="fa fa-location-arrow"></i><a href="{{ route('admin.infografik.index') }}">Infografik</a></li>
            {{-- <li><i class="fa fa-bullhorn"></i><a href="#">Berita</a></li>
            <li><i class="fa fa-picture-o"></i><a href="#">Galeri</a></li> --}}
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </nav>
</aside>
