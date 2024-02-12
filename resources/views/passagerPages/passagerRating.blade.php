@extends('layoutsPassager.app')
  
@section('title')
  
@section('contents')
    <h1 class="mb-0">Rating your driver</h1>
    <hr />
    @if(Session::has('success'))
    <div class="alert alert-success" role="alert">
        {{ Session::get('success') }}
    </div>
@endif
 
    <form method="POST" enctype="multipart/form-data" id="profile_setup_frm" action="{{ route('passagerProfile.update', auth()->user()->id) }}" >

        @csrf
        @method('PUT')
    <div class="row">
        <div class="col-md-12 border-right">
            <div class="p-3 py-5">
               
                <div class="row" id="res"></div>
              
                <div class="row mt-2">
                    <div class="col-md-6">
                        <label class="labels" style="color:black;">Rating</label>
                        <input type="number" name="rating" class="form-control" placeholder="number betwen 1 and 5">
                    </div>
                   
                </div>
                 
                <div class="mt-5 text-center"><button id="btn" class="btn btn-primary profile-button" type="submit">Save rating</button></div>
            </div>
        </div>
         
    </div>   
            
        </form>
@endsection