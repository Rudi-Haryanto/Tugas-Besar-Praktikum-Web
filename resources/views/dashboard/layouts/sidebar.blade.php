<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/dashboard">
      <div class="sidebar-brand-text mx-3">Dashboard</div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider">

  @can('isAdmin')
      <!-- Heading -->
  <div class="sidebar-heading">
    Admin
  </div>
  
  <!-- Nav Item - Charts -->
  <li class="nav-item">
      <a class="nav-link" href="{{ route('rooms.index') }}">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Rooms</span></a>
  </li>

  <!-- Nav Item - Tables -->
  <li class="nav-item">
      <a class="nav-link" href="{{ route('bookings.history') }}">
          <i class="fas fa-fw fa-table"></i>
          <span>Booking History</span></a>
  </li>
  @endcan

  @can('isUser')
      <!-- Heading -->
  <div class="sidebar-heading">
    User
  </div>

  <!-- Nav Item - Tables -->
  <li class="nav-item">
      <a class="nav-link" href="{{ route('bookings.index') }}">
          <i class="fas fa-fw fa-table"></i>
          <span>Booking</span></a>
  </li>
  @endcan

  <li class="nav-item">
      <a class="nav-link" href="/photos">
          <i class="fas fa-fw fa-table"></i>
          <span>Photos</span></a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">

  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>

</ul>
<!-- End of Sidebar -->