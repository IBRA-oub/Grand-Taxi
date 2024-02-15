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
        <tbody>
            @if($chauffeur->count() > 0)
                @foreach($chauffeur as $rs)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $rs->name }}</td>
                        <td class="align-middle">
                            <img src="{{asset('storage/image/'.$rs->picture)}}" width="70" height="60" alt="" class="rounded" alt="">
                            </td>
                        <td class="align-middle">{{ $rs->phone }}</td>
                        <td class="align-middle">{{ $rs->matricule }}</td>  
                        <td class="align-middle">{{ $rs->typeVoiture }}</td>  
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <form action="{{route('adminChauffeurs.update',$rs->id)}}" method="GET" type="button" class="btn btn-danger p-0" onsubmit="return confirm('archiver')">
                                    @csrf
                                    @method('PUT')
                                    <button class="btn btn-danger m-0">archiver</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="5">chauffeurs not found</td>
                </tr>
            @endif
        </tbody>
      
    </table>
@endsection