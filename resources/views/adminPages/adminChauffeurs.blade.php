@extends('layoutsAdmin.app')
  
@section('title')
  
@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">List Chauffeurs</h1>
        
    </div>
    <hr />
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th>#</th>
                <th>name</th>
                <th>picture</th>
                <th>phone</th>
                <th>matricule</th>
                <th>type voiture</th>
                <th>Action</th>
            </tr>
        </thead>
      
    </table>
@endsection