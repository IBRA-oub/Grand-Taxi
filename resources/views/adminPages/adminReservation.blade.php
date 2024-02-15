@extends('layoutsAdmin.app')
  
@section('title')
  
@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">List Passagers</h1>
        
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
                <th>depart</th>
                <th>arrive</th>
                <th>date de depart</th>
                <th>chauffeur name</th>
                <th>passager id</th>
               
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @if($reservation->count() > 0)
                @foreach($reservation as $rs)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $rs->depart }}</td>
                        <td class="align-middle">{{ $rs->arrive }}</td>
                        <td class="align-middle">{{ $rs->dateDepart }}</td>
                        <td class="align-middle">{{ $rs->name }}</td>
                        <td class="align-middle">{{ $rs->passager_id }}</td>
                        
                       
                      
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <form action="{{route('adminReservation.update',$rs->id)}}" method="GET" type="button" class="btn btn-danger p-0" onsubmit="return confirm('archiver')">
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
                    <td class="text-center" colspan="5">passagers not found</td>
                </tr>
            @endif
        </tbody>
      
    </table>
@endsection