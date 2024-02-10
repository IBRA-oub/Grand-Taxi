<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
  
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
      <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-laugh-wink"></i>
      </div>
      <div class="sidebar-brand-text mx-3">Admin <sup>TM</sup></div>
    </a>
    
    <!-- Divider -->
    <hr class="sidebar-divider my-0">
    
    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
      <a class="nav-link" href="{{ route('dashboardAdmin') }}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
    </li>
    
    <li class="nav-item">
      <a class="nav-link" href="adminPages/adminChauffeurs">
        <i class="fas fa-fw fa-light fa-users"></i>
        <span>Chauffeurs</span></a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="adminPages/adminPassagers">
        <i class="fas fa-fw fa-light fa-users"></i>
        <span>Passagers</span></a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="adminPages/adminReservation">
        <i class="fas fa-fw fa-duotone fa-check-to-slot"></i>
        <span>Reservation</span></a>
    </li>
    
    <li class="nav-item">
      <a class="nav-link" href="adminPages/adminProfile">
        <i class="fas fa-fw fa-duotone fa-id-card"></i>
        <span>Profile</span></a>
    </li>
    
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">
    
    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
    
    
  </ul>