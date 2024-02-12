<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
  
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" >
      <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-laugh-wink"></i>
      </div>
      <div class="sidebar-brand-text mx-3">Chauffeur <sup>TM</sup></div>
    </a>
    
    <!-- Divider -->
    <hr class="sidebar-divider my-0">
    
    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
      <a class="nav-link" href="{{ route('dashboardChauffeur') }}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
    </li>
    
    <li class="nav-item">
      <a class="nav-link" href="{{route('chauffeurReservation')}}">
        <i class="fas fa-fw fa-light fa-users"></i>
        <span>Reservation</span></a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="{{route('chauffeurHistorique')}}">
        <i class="fas fa-fw fa-duotone fa-check-to-slot"></i>
        <span>Historique</span></a>
    </li>
    
    <li class="nav-item">
      <a class="nav-link" href="{{route('chauffeurProfile')}}">
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