@extends('layoutsAdmin.app')

@section('title')

@section('contents')

<!-- Page Wrapper -->
<div id="wrapper">

 

   <!-- Content Wrapper -->
   <div id="content-wrapper" class="d-flex flex-column">

       <!-- Main Content -->
       <div id="content">

        

           <!-- Begin Page Content -->
           <div class="container-fluid">

               <!-- Page Heading -->
               <div class="d-sm-flex align-items-center justify-content-between mb-4">
                   <h1 class="h3 mb-0 text-gray-800">Satistique</h1>
               </div>

               <div class="row">

                   <!-- Earnings (Monthly) Card Example -->
                   <div class="col-xl-3 col-md-6 mb-4">
                       <div class="card border-left-primary shadow h-100 py-2">
                           <div class="card-body">
                               <div class="row no-gutters align-items-center">
                                   <div class="col mr-2">
                                       <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                           Reservation</div>
                                       <div class="h5 mb-0 font-weight-bold ">{{$reservationStatistique}}</div>
                                   </div>
                                   <div class="col-auto">
                                    
                                       <i class="fas fa-solid  fa-route fa-2x "></i>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>

                   <!-- Earnings (Annual) Card Example -->
                   <div class="col-xl-3 col-md-6 mb-4">
                       <div class="card border-left-success shadow h-100 py-2">
                           <div class="card-body">
                               <div class="row no-gutters align-items-center">
                                   <div class="col mr-2">
                                       <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                           Chauffeurs</div>
                                       <div class="h5 mb-0 font-weight-bold text-gray-800">{{$chauffeurStatistique}}</div>
                                   </div>
                                   <div class="col-auto">
                                       <i class="fas fa-solid fa-users fa-2x"></i>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>

                   <!-- Tasks Card Example -->
                   <div class="col-xl-3 col-md-6 mb-4">
                       <div class="card border-left-info shadow h-100 py-2">
                           <div class="card-body">
                               <div class="row no-gutters align-items-center">
                                   <div class="col mr-2">
                                       <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Passagers
                                       </div>
                                       <div class="row no-gutters align-items-center">
                                           <div class="col-auto">
                                               <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{$passagerStatistique}}</div>
                                           </div>
                                          
                                       </div>
                                   </div>
                                   <div class="col-auto">
                                    <i class="fas fa-solid fa-users fa-2x"></i>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>

                 
               </div>

               <div class="row">

                   <div class="col-lg-6">

                       <!-- Default Card Example -->
                       <div class="card mb-4">
                           <div class="card-header">
                              Tableau de Bord Administratif
                           </div>
                           <div class="card-body">
                              Ce tableau de bord offre une vue d'ensemble en temps réel de l'activité des grands taxis, 
                              
                              permettant aux administrateurs de surveiller le nombre de courses effectuées, la localisation
                               des véhicules, ainsi que les temps d'attente et les retards éventuels. Il fournit des outils d'analyse 
                              et de reporting pour optimiser la gestion opérationnelle du service de taxi.
                           </div>
                       </div>

                       <!-- Basic Card Example -->
                       <div class="card shadow mb-4">
                           <div class="card-header py-3">
                               <h6 class="m-0 font-weight-bold text-primary">Gestion des Flottes de Grands Taxis</h6>
                           </div>
                           <div class="card-body">
                              Ce titre met en avant les fonctionnalités du dashboard dédiées à la gestion des flottes de grands taxis. Les administrateurs peuvent planifier et assigner efficacement les véhicules en fonction de la demande, tout en utilisant des algorithmes de maintenance prédictive pour minimiser les temps d'arrêt et assurer la disponibilité optimale des taxis.
                           </div>
                       </div>

                   </div>

                   <div class="col-lg-6">

                       <!-- Dropdown Card Example -->
                       <div class="card shadow mb-4">
                           <!-- Card Header - Dropdown -->
                           <div
                               class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                               <h6 class="m-0 font-weight-bold text-primary">Sécurité et Conformité</h6>
                               <div class="dropdown no-arrow">
                                   <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                       <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                   </a>
                                   <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                       aria-labelledby="dropdownMenuLink">
                                       <div class="dropdown-header">Dropdown Header:</div>
                                       <a class="dropdown-item" href="#">Action</a>
                                       <a class="dropdown-item" href="#">Another action</a>
                                       <div class="dropdown-divider"></div>
                                       <a class="dropdown-item" href="#">Something else here</a>
                                   </div>
                               </div>
                           </div>
                           <!-- Card Body -->
                           <div class="card-body">
                              Surveillance des Normes et Gestion des Incidents"
                              Description : Ce tableau de bord offre des outils de surveillance des normes de sécurité et de conformité réglementaire pour les grands taxis. Les administrateurs peuvent suivre les incidents de sécurité
                           </div>
                       </div>

                       <!-- Collapsable Card Example -->
                       <div class="card shadow mb-4">
                           <!-- Card Header - Accordion -->
                           <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse"
                               role="button" aria-expanded="true" aria-controls="collapseCardExample">
                               <h6 class="m-0 font-weight-bold text-primary">Mesure de l'Expérience Client</h6>
                           </a>
                           <!-- Card Content - Collapse -->
                           <div class="collapse show" id="collapseCardExample">
                               <div class="card-body">
                                 Les administrateurs peuvent analyser les données de feedback des passagers, les évaluations des courses et les tendances de demande pour identifier les points forts et les axes d'amélioration du service de taxi.
                               </div>
                           </div>
                       </div>

                   </div>

               </div>

           </div>
           <!-- /.container-fluid -->

       </div>
       <!-- End of Main Content -->

     

   </div>
   <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->
    
@endsection