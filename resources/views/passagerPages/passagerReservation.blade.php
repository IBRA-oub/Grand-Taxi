@extends('layoutsPassager.app')
  
@section('title')
  
@section('contents')

@if(Session::has('success'))
<div class="alert alert-success" role="alert">
    {{ Session::get('success') }}
</div>
@endif


@foreach($reservations as $reservation)


<div class="mt-50 mb-50 "  >
            
    <div class="row" style="width:120%">
       <div class="col-md-10" >

                <div class="card card-body mt-3 shadow">
                        <div class="media align-items-center align-items-lg-start text-center text-lg-left flex-column flex-lg-row">
                            <div class="mr-2 mb-3 mb-lg-0">
                                
                                    <img src="{{asset('storage/image/' .$reservation->picture)}}" width="170" height="160" alt="" class="rounded">
                               
                            </div>

                            <div class="media-body">
                                <h6 class="media-title font-weight-semibold">
                                            <p href="#" data-abc="true">Name : <strong>{{$reservation->name}}</strong></p>
                                            <p href="#" data-abc="true">type voiture : <strong> {{$reservation->typeVoiture}}</strong></p>
                                            <p href="#" data-abc="true">date de depart: <strong> {{$reservation->dateDepart}}</strong></p>
                                </h6>

                                <p class="card-text"><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24"><g fill="none" stroke="#ff6900" stroke-width="2"><path d="M5 8.515C5 4.917 8.134 2 12 2s7 2.917 7 6.515c0 3.57-2.234 7.735-5.72 9.225a3.277 3.277 0 0 1-2.56 0C7.234 16.25 5 12.084 5 8.515Z"></path><path d="M14 9a2 2 0 1 1-4 0a2 2 0 0 1 4 0Z"></path><path stroke-linecap="round" d="M20.96 15.5c.666.602 1.04 1.282 1.04 2c0 2.485-4.477 4.5-10 4.5S2 19.985 2 17.5c0-.718.374-1.398 1.04-2"></path></g></svg>{{$reservation->depart}} ———————————————————————— <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24"><g fill="none" stroke="#ff6900" stroke-width="2"><path d="M5 8.515C5 4.917 8.134 2 12 2s7 2.917 7 6.515c0 3.57-2.234 7.735-5.72 9.225a3.277 3.277 0 0 1-2.56 0C7.234 16.25 5 12.084 5 8.515Z"></path><path d="M14 9a2 2 0 1 1-4 0a2 2 0 0 1 4 0Z"></path><path stroke-linecap="round" d="M20.96 15.5c.666.602 1.04 1.282 1.04 2c0 2.485-4.477 4.5-10 4.5S2 19.985 2 17.5c0-.718.374-1.398 1.04-2"></path></g></svg> {{$reservation->arrive}}</p>
                            </div>

                            <div class="border-end border-1" style="height: 160px;"></div>

                            <div class="mt-3 mt-lg-0 ml-lg-3 text-center" style=" width: 250px; @media (max-width: 767px) { width: auto; margin-top: 6px; }">

                                <h3 class="mb-0 font-weight-semibold">99 <sup>DH</sup></h3>
                              
                                <div>&emsp; </div>
                                <div>&emsp; </div>
                                <div>&emsp; </div>
                                <div>&emsp; </div>
                                <form method="POST" action="{{ route('favorite.update', $reservation->id) }}" style="@media (max-width: 767px) { margin-top: 10px; }">
                                    @csrf
                                    @method('PUT')
                                    <span><button type="submit" style=" color: #f57878; border: none; background-color: white;"><i class="fas fa-duotone fa-heart fa-2xl" ></i></button></span>
                                 
                                    <span>&emsp; &emsp; </span> 
                                    <span> 
                                        <a href="{{route('passagerRating',$reservation->id)}}"> <i class="fas fa-solid fa-check fa-2xl" style="color: #63E6BE;"></i></a>
                                    </span>
                                </form>

                                <div>&emsp; </div>
                                @php
                                    $dateDepart = new DateTime($reservation->dateDepart);
                                    $dateActuelle = new DateTime();
                                    $difference = $dateActuelle->diff($dateDepart);
                                    $restePlusUnJour = $difference->days < 1;
                                @endphp
                                <!-- Affichage du bouton d'annulation de réservation s'il reste plus d'un jour avant la réservation -->
                                @if($restePlusUnJour)
                                    <form method="POST" action="{{route('deleteReservation',$reservation->id)}}" style="@media (max-width: 767px) { margin-top: 10px; }">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-warning">Annuler la réservation</button>
                                    </form>
                                @endif
                            </div>
                        </div>
                    </div>    

                         
    </div>                     
    </div>
</div>
@endforeach

@endsection
