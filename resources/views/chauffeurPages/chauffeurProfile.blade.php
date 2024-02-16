@extends('layoutsChauffeur.app')
  
@section('title')
  
@section('contents')
    <h1 class="mb-0">
        <i class="fas fa-duotone fa-star" style="color: rgb(239, 239, 14)"></i>
        <i class="fas fa-duotone fa-star" style="color: rgb(239, 239, 14)"></i>
        <i class="fas fa-duotone fa-star" style="color: rgb(239, 239, 14)"></i>
        <i class="fas fa-duotone fa-star" style="color: rgb(239, 239, 14)"></i>
        <i class="fas fa-duotone fa-star" style="color: rgb(239, 239, 14)"></i>

        @if(isset($ratingChauffeur))
        <span class=" badge-counter" style="color: black"> {{$ratingChauffeur->moyenne_etoiles}}</span>
        @else
        <span class=" badge-counter" style="color: black"> 0</span>
        @endif
    </h1>
    <hr />
    @if(Session::has('success'))
    <div class="alert alert-success" role="alert">
        {{ Session::get('success') }}
    </div>
@endif
 
    <form method="POST" enctype="multipart/form-data" id="profile_setup_frm" action="{{ route('chauffeurProfile.update', auth()->user()->id) }}" >

        @csrf
        @method('PUT')
    <div class="row">
        <div class="col-md-12 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profile Settings</h4>
                </div>
                <div class="row" id="res"></div>
                <div class="row mt-2">
  
                    <div class="col-md-6">
                        <label class="labels">Name</label>
                        <input type="text" name="name" class="form-control" placeholder="first name" value="{{ auth()->user()->name }}">
                    </div>
                    <div class="col-md-6">
                        <label class="labels">Email</label>
                        <input type="email" name="email" disabled class="form-control" value="{{ auth()->user()->email }}" placeholder="Email">
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6">
                        <label class="labels">Phone</label>
                        <input type="number" name="phone" class="form-control" placeholder="Phone Number" value="{{ auth()->user()->phone }}">
                    </div>

                    <div class="col-md-6">
                        <label class="labels">type de payement</label>
                        <input type="text" name="typePayement" class="form-control" placeholder="cash, carte.." value="{{ auth()->user()->typePayement }}">
                    </div>
 
                </div>

                    <hr>
                <div class="row mt-2">
                    <div class="col-md-6">
                        <label class="labels">matricule</label>
                        <input type="text" name="matricule" class="form-control" placeholder="matricule" value="{{ auth()->user()->matricule }}">
                    </div>

                    <div class="col-md-6">
                        <label class="labels">type de voiture</label>
                        <input type="text" name="typeVoiture" class="form-control" placeholder="grand ford" value="{{ auth()->user()->typeVoiture }}">
                    </div>
                   
                </div>

                <div class="row mt-2">
                    <div class="col-md-6">
                        <label class="labels">description</label>
                        <input type="text" name="description" class="form-control" placeholder="description" value="{{ auth()->user()->description }}">
                    </div>
                   
                </div>


                <hr>
                <div class="row mt-2">
                    <div class="col-md-6">
                        <label class="labels">depart</label>
                        <input type="text" name="depart" class="form-control" placeholder="Safi" value="{{ auth()->user()->depart }}">
                    </div>

                    <div class="col-md-6">
                        <label class="labels">arrive</label>
                        <input type="text" name="arrive" class="form-control" placeholder="Marrakech" value="{{ auth()->user()->arrive }}">
                    </div>

                    <div class="col-md-6">
                        <label class="labels">date de depart</label>
                        <input type="date" name="dateDepart" class="form-control" placeholder="00-00-0000" value="{{ auth()->user()->dateDepart }}">
                    </div>
                   
                </div>
                 
                <div class="mt-5 text-center"><button id="btn" class="btn btn-primary profile-button" type="submit">Save Profile</button></div>
            </div>
        </div>
         
    </div>   
            
        </form>
@endsection