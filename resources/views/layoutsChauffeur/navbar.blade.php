<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
  
    <!-- Sidebar Toggle (Topbar) -->
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
      <i class="fa fa-bars"></i>
    </button>
    
    <!-- Topbar Search -->
    
    
    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto">
    
      <!-- Nav Item - Search Dropdown (Visible Only XS) -->
      <li class="nav-item dropdown no-arrow d-sm-none">
        
        <!-- Dropdown - Messages -->
        
      </li>
    
      <!-- Nav Item - Alerts -->
      <li class="nav-item dropdown no-arrow mx-1">
        <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-duotone fa-eye"></i>
          <!-- Counter - Alerts -->
          <span class="badge badge-danger badge-counter">+</span>
        </a>
        <!-- Dropdown - Alerts -->
        <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
          <h6 class="dropdown-header">
            votre status
          </h6>
          <form action="{{ route('chauffeurStatus.update', auth()->user()->id) }}" method="POST">
            @csrf
            @method('PUT')
            <select name="status" class="form-select" aria-label="Default select example">
              <option selected>choiser ici</option>
              <option value="disponible">disponible</option>
              <option value="en cour">en cour</option>
              <option value="hors service">hors service</option>
            </select>
          
           
            <button type="submit" class="dropdown-item text-center fs-6 text-gray-600">save status</button>

          </form>
         
         
         
        </div>
      </li>
    
     
    
      <div class="topbar-divider d-none d-sm-block"></div>
    
      <!-- Nav Item - User Information -->
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span class="mr-2 d-none d-lg-inline text-gray-600 small">
            {{ auth()->user()->name }}
            <br>
            <small>{{ auth()->user()->role }}</small>
          </span>
          <img class="img-profile rounded-circle" src="{{asset('storage/image/' .auth()->user()->picture)}}">
        </a>
        <!-- Dropdown - User Information -->
        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
          <a class="dropdown-item" href="{{route('chauffeurProfile')}}">
            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
            Profile
          </a>
          
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="{{ route('logout') }}">
            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
            Logout
          </a>
        </div>
      </li>
    
    </ul>
    
  </nav>