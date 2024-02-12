@extends('layoutsPassager.app')

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

                   <div class="col-lg-6">

                       <!-- Default Card Example -->
                       <div class="card mb-4">
                           <div class="card-header">
                               Default Card Example
                           </div>
                           <div class="card-body">
                               This card uses Bootstrap's default styling with no utility classes added. Global
                               styles are the only things modifying the look and feel of this default card example.
                           </div>
                       </div>

                       <!-- Basic Card Example -->
                       <div class="card shadow mb-4">
                           <div class="card-header py-3">
                               <h6 class="m-0 font-weight-bold text-primary">Basic Card Example</h6>
                           </div>
                           <div class="card-body">
                               The styling for this basic card example is created by using default Bootstrap
                               utility classes. By using utility classes, the style of the card component can be
                               easily modified with no need for any custom CSS!
                           </div>
                       </div>

                   </div>

                   <div class="col-lg-6">

                       <!-- Dropdown Card Example -->
                       <div class="card shadow mb-4">
                           <!-- Card Header - Dropdown -->
                           <div
                               class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                               <h6 class="m-0 font-weight-bold text-primary">Dropdown Card Example</h6>
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
                               Dropdown menus can be placed in the card header in order to extend the functionality
                               of a basic card. In this dropdown card example, the Font Awesome vertical ellipsis
                               icon in the card header can be clicked on in order to toggle a dropdown menu.
                           </div>
                       </div>

                       <!-- Collapsable Card Example -->
                       <div class="card shadow mb-4">
                           <!-- Card Header - Accordion -->
                           <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse"
                               role="button" aria-expanded="true" aria-controls="collapseCardExample">
                               <h6 class="m-0 font-weight-bold text-primary">Collapsable Card Example</h6>
                           </a>
                           <!-- Card Content - Collapse -->
                           <div class="collapse show" id="collapseCardExample">
                               <div class="card-body">
                                   This is a collapsable card example using Bootstrap's built in collapse
                                   functionality. <strong>Click on the card header</strong> to see the card body
                                   collapse and expand!
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