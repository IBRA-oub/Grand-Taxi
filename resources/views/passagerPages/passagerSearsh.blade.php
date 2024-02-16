<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>@yield('title') </title>
  <!-- Custom fonts for this template-->
  <link href="{{ asset('admin_assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/d31179dac2.js" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

  <!-- Custom styles for this template-->
  <link href="{{ asset('admin_assets/css/sb-admin-2.min.css') }}" rel="stylesheet">

  <style>
    /* Style pour la liste déroulante */
    select {
        width: 100%;
        padding: 10px;
        font-size: 16px;
        border: 1px solid #ccc;
        border-radius: 4px;
        background-color: #f8f8f8;
    }

    /* Style pour les options */
    option {
        font-weight: bold; /* Texte en gras */
        font-style: italic; /* Texte en italique */
    }
</style>
</head>
<body id="page-top">
  <!-- Page Wrapper -->
  <div id="wrapper">
  
    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
  
        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
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
            <span>Dashboard</span></a>
        </li>
        
       
        <form action="{{route('searshVoiture.searsh')}}" method="GET">
            @csrf
          
       <li class="nav-item">
        <label class="labels" style="color: aliceblue; margin-left:5px;">filter by type voiture</label>
        <div class="input-group">
            
            <input name="voitureSearsh" type="text" class="form-control bg-light border-0 small" placeholder="grand ford" aria-label="Search" aria-describedby="basic-addon2">
            <div class="input-group-append" >
              <button type="submit" class="btn btn-primary" style="background-color: rgb(34, 225, 246);" type="button">
                <i class="fas fa-search fa-sm"></i>
              </button>
            </div>
          </div>
       </li>
    </form>
    
   <form action="{{route('searshRating.searsh')}}" method="GET">
        @csrf

       <li class="nav-item">
        <label class="labels" style="color: aliceblue; margin-left:5px;">filter by rating</label>
        <div class="input-group">
            <select class="form-select" name="ratingSearsh" aria-label="Default select example">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
              </select>
            <div class="input-group-append" >
              <button type="submit" class="btn btn-primary" style="background-color: rgb(34, 225, 246);" type="button">
                <i class="fas fa-search fa-sm"></i>
              </button>
            </div>
          </div>
       </li>

    </form>
    
        
        
        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">
        
        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
          <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>
        
        
      </ul>
    <!-- End of Sidebar -->
  
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
  
      <!-- Main Content -->
      <div id="content">
  
        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
  
            <!-- Sidebar Toggle (Topbar) -->
            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
              <i class="fa fa-bars"></i>
            </button>
            
         
            
            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">
            
              <!-- Nav Item - Search Dropdown (Visible Only XS) -->
              <li class="nav-item dropdown no-arrow d-sm-none">
                
                <!-- Dropdown - Messages -->
               
              </li>
            
              <!-- Nav Item - Alerts -->
              <li class="nav-item dropdown no-arrow mx-1">
                
             
            
              <!-- Nav Item - Messages -->
              <li class="nav-item dropdown no-arrow mx-1">
               
                <!-- Dropdown - Messages -->
                
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
        <!-- End of Topbar -->
  
        <!-- Begin Page Content -->
        <div class="container-fluid">
  
          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">@yield('title')</h1>
          </div>
          @if($utilisateurs->isNotEmpty())
          @foreach($utilisateurs as $utilisateur)
         
          <div class=" mt-50 mb-50 "  style="min-width: 1400px;">
            
            <div class="row">
               <div class="col-md-10">
                <form action="{{route('reservation.create')}}" method="POST">
                    @csrf
                    <input type="hidden" name="chauffeur_id" value="{{$utilisateur['id']}}">
                    <input type="hidden" name="passager_id" value="{{auth()->user()->id}}">
                    
                    <input type="hidden" name="depart" value="{{$utilisateur['depart']}}">
                    <input type="hidden" name="arrive" value="{{$utilisateur['arrive']}}">
                   
                  
        
                        <div class="card card-body mt-3 shadow">
                                <div class="media align-items-center align-items-lg-start text-center text-lg-left flex-column flex-lg-row">
                                    <div class="mr-2 mb-3 mb-lg-0">
                                        
                                            <img src="{{asset('storage/image/' .$utilisateur['picture'])}}" width="170" height="160" alt="" class="rounded">
                                       
                                    </div>
        
                                    <div class="media-body ">
                                        <h6 class="media-title font-weight-semibold">
                                            <p href="#" data-abc="true">Name : <strong>{{$utilisateur['name']}}</strong></p>
                                            <p href="#" data-abc="true">type voiture : <strong> {{$utilisateur['typeVoiture']}}</strong></p>
                                            <p href="#" data-abc="true">date de depart: <strong> {{$utilisateur['dateDepart']}}</strong></p>
                                            <p href="#" data-abc="true">status: <strong> {{$utilisateur['status']}}</strong></p>
                                            
                                            <i class="fa fa-star" style="color: rgb(239, 239, 14)"></i>
                                            <i class="fa fa-star" style="color: rgb(239, 239, 14)"></i>
                                            <i class="fa fa-star" style="color: rgb(239, 239, 14)"></i>
                                            <i class="fa fa-star" style="color: rgb(239, 239, 14)"></i>
                                            <i class="fa fa-star" style="color: rgb(239, 239, 14)"></i>
                                            
                                           
                                          
                                            
                                            
                                        </h6>
        
                                        
                                        
                                  
                                        <p class="card-text"><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24"><g fill="none" stroke="#ff6900" stroke-width="2"><path d="M5 8.515C5 4.917 8.134 2 12 2s7 2.917 7 6.515c0 3.57-2.234 7.735-5.72 9.225a3.277 3.277 0 0 1-2.56 0C7.234 16.25 5 12.084 5 8.515Z"></path><path d="M14 9a2 2 0 1 1-4 0a2 2 0 0 1 4 0Z"></path><path stroke-linecap="round" d="M20.96 15.5c.666.602 1.04 1.282 1.04 2c0 2.485-4.477 4.5-10 4.5S2 19.985 2 17.5c0-.718.374-1.398 1.04-2"></path></g></svg>{{$utilisateur['depart']}} ———————————————————————— <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24"><g fill="none" stroke="#ff6900" stroke-width="2"><path d="M5 8.515C5 4.917 8.134 2 12 2s7 2.917 7 6.515c0 3.57-2.234 7.735-5.72 9.225a3.277 3.277 0 0 1-2.56 0C7.234 16.25 5 12.084 5 8.515Z"></path><path d="M14 9a2 2 0 1 1-4 0a2 2 0 0 1 4 0Z"></path><path stroke-linecap="round" d="M20.96 15.5c.666.602 1.04 1.282 1.04 2c0 2.485-4.477 4.5-10 4.5S2 19.985 2 17.5c0-.718.374-1.398 1.04-2"></path></g></svg> {{$utilisateur['arrive']}}</p>
                                    </div>
        
                                    <div class="border-end border-1" style="height: 160px;"></div>
        
                                    <div class="mt-3 mt-lg-0 ml-lg-3 text-center" style=" width: 250px">

                                        <h3 class="mb-0 font-weight-semibold">612.99 <sup>DH</sup></h3>
                              
                                        <div>&emsp; </div>
                                        <div>&emsp; </div>
                                   
                                        
                                        <button  type="submit" class="btn btn-success mt-4 text-white"><i class="icon-cart-add mr-2"></i>reservation</button>
        
                                    </div>
        
                                </div>
                            </div>  
                        </form>  
        
                                 
            </div>                     
            </div>
        </div>
        @endforeach

         @else
        
         @foreach($ratingUtilisateurs as $ratingUtilisateur)
         <div class=" mt-50 mb-50 "  style="min-width: 1400px;">
           
           <div class="row">
              <div class="col-md-10">
               <form action="{{route('reservation.create')}}" method="POST">
                   @csrf
                   <input type="hidden" name="chauffeur_id" value="{{$ratingUtilisateur->id}}">
                   <input type="hidden" name="passager_id" value="{{auth()->user()->id}}">
                   
                   <input type="hidden" name="depart" value="{{$ratingUtilisateur->depart}}">
                   <input type="hidden" name="arrive" value="{{$ratingUtilisateur->arrive}}">
                  
                 
       
                       <div class="card card-body mt-3 shadow">
                               <div class="media align-items-center align-items-lg-start text-center text-lg-left flex-column flex-lg-row">
                                   <div class="mr-2 mb-3 mb-lg-0">
                                       
                                           <img src="{{asset('storage/image/' .$ratingUtilisateur->picture)}}" width="170" height="160" alt="" class="rounded">
                                      
                                   </div>
       
                                   <div class="media-body ">
                                       <h6 class="media-title font-weight-semibold">
                                           <p href="#" data-abc="true">Name : <strong>{{$ratingUtilisateur->name}}</strong></p>
                                           <p href="#" data-abc="true">type voiture : <strong> {{$ratingUtilisateur->typeVoiture}}</strong></p>
                                           <p href="#" data-abc="true">date de depart: <strong> {{$ratingUtilisateur->dateDepart}}</strong></p>
                                           <p href="#" data-abc="true">status: <strong> {{$ratingUtilisateur->status}}</strong></p>
                                           <i class="fa fa-star" style="color: rgb(239, 239, 14)"></i>
                                           <i class="fa fa-star" style="color: rgb(239, 239, 14)"></i>
                                           <i class="fa fa-star" style="color: rgb(239, 239, 14)"></i>
                                           <i class="fa fa-star" style="color: rgb(239, 239, 14)"></i>
                                           <i class="fa fa-star" style="color: rgb(239, 239, 14)"></i>
                                          
                                           <span>{{$ratingUtilisateur->moyenne_etoiles}}</span>
                                          
                                       </h6>
       
                                       
                                       
                                 
                                       <p class="card-text"><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24"><g fill="none" stroke="#ff6900" stroke-width="2"><path d="M5 8.515C5 4.917 8.134 2 12 2s7 2.917 7 6.515c0 3.57-2.234 7.735-5.72 9.225a3.277 3.277 0 0 1-2.56 0C7.234 16.25 5 12.084 5 8.515Z"></path><path d="M14 9a2 2 0 1 1-4 0a2 2 0 0 1 4 0Z"></path><path stroke-linecap="round" d="M20.96 15.5c.666.602 1.04 1.282 1.04 2c0 2.485-4.477 4.5-10 4.5S2 19.985 2 17.5c0-.718.374-1.398 1.04-2"></path></g></svg>{{$ratingUtilisateur->depart}} ———————————————————————— <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24"><g fill="none" stroke="#ff6900" stroke-width="2"><path d="M5 8.515C5 4.917 8.134 2 12 2s7 2.917 7 6.515c0 3.57-2.234 7.735-5.72 9.225a3.277 3.277 0 0 1-2.56 0C7.234 16.25 5 12.084 5 8.515Z"></path><path d="M14 9a2 2 0 1 1-4 0a2 2 0 0 1 4 0Z"></path><path stroke-linecap="round" d="M20.96 15.5c.666.602 1.04 1.282 1.04 2c0 2.485-4.477 4.5-10 4.5S2 19.985 2 17.5c0-.718.374-1.398 1.04-2"></path></g></svg> {{$ratingUtilisateur->arrive}}</p>
                                   </div>
       
                                   <div class="border-end border-1" style="height: 160px;"></div>
       
                                   <div class="mt-3 mt-lg-0 ml-lg-3 text-center" style=" width: 250px">

                                       <h3 class="mb-0 font-weight-semibold">612.99 <sup>DH</sup></h3>
                             
                                       <div>&emsp; </div>
                                       <div>&emsp; </div>
                                  
                                       
                                       <button  type="submit" class="btn btn-success mt-4 text-white"><i class="icon-cart-add mr-2"></i>reservation</button>
       
                                   </div>
       
                               </div>
                           </div>  
                       </form>  
       
                                
           </div>                     
           </div>
       </div>
       @endforeach
       @endif

  
          <!-- Content Row -->
  
  
        </div>
        <!-- /.container-fluid -->
  
      </div>
      <!-- End of Main Content -->
  
      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright © Your Website 2021</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->
  
    </div>
    <!-- End of Content Wrapper -->
  
  </div>
  <!-- End of Page Wrapper -->
  
  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>
  
  <!-- Bootstrap core JavaScript-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <script src="{{ asset('admin_assets/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('admin_assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <!-- Core plugin JavaScript-->
  <script src="{{ asset('admin_assets/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
  <!-- Custom scripts for all pages-->
  <script src="{{ asset('admin_assets/js/sb-admin-2.min.js') }}"></script>
  <!-- Page level plugins -->
  <script src="{{ asset('admin_assets/vendor/chart.js/Chart.min.js') }}"></script>
</body>
</html>