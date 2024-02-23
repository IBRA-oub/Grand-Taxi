@extends('layoutsChauffeur.app')

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
              

              

               <div class="row">

                   <div class="col-lg-6">

                       <!-- Default Card Example -->
                       <div class="card mb-4">
                           <div class="card-header">
                            Le Voyage Anticipé: Réservation en Avance avec le Grand Taxi
                           </div>
                           <div class="card-body">
                            Description : Découvrez comment planifier vos déplacements à l'avance 
                            en réservant votre grand taxi pour un voyage sans stress et une tranquillité d'esprit garantie.
                           </div>
                       </div>

                       <!-- Basic Card Example -->
                       <div class="card shadow mb-4">
                           <div class="card-header py-3">
                               <h6 class="m-0 font-weight-bold text-primary">La Commodité à Votre Portée: Réservation Instantanée de Grand Taxi"</h6>
                           </div>
                           <div class="card-body">
                            Description : Explorez la facilité et la rapidité de réserver un grand taxi 
                            en ligne ou via une application mobile, mettant
                             ainsi le pouvoir de votre voyage entre vos mains, où que vous soyez.
                           </div>
                       </div>

                   </div>

                   <div class="col-lg-6">

                       <!-- Dropdown Card Example -->
                       <div class="card shadow mb-4">
                           <!-- Card Header - Dropdown -->
                           <div
                               class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                               <h6 class="m-0 font-weight-bold text-primary">Réservation sur Mesure avec le Grand Taxi</h6>
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
                            Description : Plongez dans l'expérience de la réservation
                             personnalisée de grand taxi, où vous pouvez spécifier vos préférences de véhicule, d'itinéraire
                             et de services supplémentaires pour un voyage adapté à vos besoins uniques.
                           </div>
                       </div>

                       <!-- Collapsable Card Example -->
                       <div class="card shadow mb-4">
                           <!-- Card Header - Accordion -->
                           <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse"
                               role="button" aria-expanded="true" aria-controls="collapseCardExample">
                               <h6 class="m-0 font-weight-bold text-primary">Le Choix de la Confiance: </h6>
                           </a>
                           <!-- Card Content - Collapse -->
                           <div class="collapse show" id="collapseCardExample">
                               <div class="card-body">
                                Description : Découvrez la tranquillité d'esprit en 
                                sachant que chaque réservation de grand taxi est soutenue par un service de qualité, avec des chauffeurs 
                                professionnels et des véhicules fiables, pour un voyage sûr et confortable à chaque fois.
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