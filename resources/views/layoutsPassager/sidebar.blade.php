<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
  
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" >
      <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-laugh-wink"></i>
      </div>
      <div class="sidebar-brand-text mx-3">Passager<sup>TM</sup></div>
    </a>
    
    <!-- Divider -->
    <hr class="sidebar-divider my-0">
    
    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
      <a class="nav-link" href="{{ route('dashboardPassager') }}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Searsh</span></a>
    </li>
    
    <li class="nav-item">
      <a class="nav-link" href="{{route('passagerReservation')}}">
        
        <i class="fas fa-fw fa-duotone fa-car-side"></i>
        <span>Reservation</span></a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="{{route('passagerFavorite')}}">
        
        <i class="fas fa-fw fa-duotone fa-heart"></i>
        <span>Favorite</span></a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="{{route('passagerHistorique')}}">
        <i class="fas fa-fw fa-duotone fa-check-to-slot"></i>
        <span>Historique</span></a>
    </li>
    
    <li class="nav-item">
      <a class="nav-link" href="{{route('passagerProfile')}}">
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