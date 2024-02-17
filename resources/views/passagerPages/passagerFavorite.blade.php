@extends('layoutsPassager.app')
  
@section('title')
  
@section('contents')

@if(Session::has('success'))
<div class="alert alert-success" role="alert">
    {{ Session::get('success') }}
</div>
@endif

@foreach($favoriteShow as $favshow)
<div class=" mt-50 mb-50 "  >
    <form action="{{route('reservationRapide.searsh')}}" method="GET" class="row g-3 align-items-center search-bar border rounded shadow p-3">
      @csrf
      <input type="hidden" name="depart" value="{{ $favshow->depart}}">
      <input type="hidden" name="arrive" value="{{ $favshow->arrive}}">
    <div class="row" style="width:120%">
       <div class="col-md-10">

                <div class="card card-body mt-3 shadow">
                        <div class="media align-items-center align-items-lg-start text-center text-lg-left flex-column flex-lg-row">
                            <div class="mr-2 mb-3 mb-lg-0">
                                
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRPmBB5CFbFGBz9Z5pGTrrUNxUZxBPABXQBvacWH9BD8GNB5gC_XNhlBISUog&s" width="170" height="160" alt="" class="rounded">
                               
                            </div>

                            <div class="media-body ">
                                <h6 class="media-title font-weight-semibold">
                                    <p  data-abc="true">Reserver Your Grand Taxi Rapidement</p>
                                </h6>

                                <div>&emsp; </div>
                                <div>&emsp; </div>
                          
                                <p class="card-text"><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24"><g fill="none" stroke="#ff6900" stroke-width="2"><path d="M5 8.515C5 4.917 8.134 2 12 2s7 2.917 7 6.515c0 3.57-2.234 7.735-5.72 9.225a3.277 3.277 0 0 1-2.56 0C7.234 16.25 5 12.084 5 8.515Z"></path><path d="M14 9a2 2 0 1 1-4 0a2 2 0 0 1 4 0Z"></path><path stroke-linecap="round" d="M20.96 15.5c.666.602 1.04 1.282 1.04 2c0 2.485-4.477 4.5-10 4.5S2 19.985 2 17.5c0-.718.374-1.398 1.04-2"></path></g></svg>{{$favshow->depart}} ———————————————————————— <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24"><g fill="none" stroke="#ff6900" stroke-width="2"><path d="M5 8.515C5 4.917 8.134 2 12 2s7 2.917 7 6.515c0 3.57-2.234 7.735-5.72 9.225a3.277 3.277 0 0 1-2.56 0C7.234 16.25 5 12.084 5 8.515Z"></path><path d="M14 9a2 2 0 1 1-4 0a2 2 0 0 1 4 0Z"></path><path stroke-linecap="round" d="M20.96 15.5c.666.602 1.04 1.282 1.04 2c0 2.485-4.477 4.5-10 4.5S2 19.985 2 17.5c0-.718.374-1.398 1.04-2"></path></g></svg> {{$favshow->arrive}}</p>
                            </div>

                            <div class="border-end border-1" style="height: 160px;"></div>

                            <div class="mt-3 mt-lg-0 ml-lg-3 text-center" style=" width: 250px">
                                
                                <button type="submit" class="btn btn-success mt-4 text-white"><i class="icon-cart-add mr-2"></i>reservation rapide</button>

                            </div>

                        </div>
                    </div>    

                         
    </div>                     
    </div>
    </form>
</div>
@endforeach

@endsection