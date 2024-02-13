@extends('layoutsPassager.app')
  
@section('title')
  
@section('contents')

@foreach($historiqueShow as $histShow)

<div class=" mt-50 mb-50 "  style="min-width: 1400px;">
            
    <div class="row">
       <div class="col-md-10">

                <div class="card card-body mt-3 shadow">
                        <div class="media align-items-center align-items-lg-start text-center text-lg-left flex-column flex-lg-row">
                            <div class="mr-2 mb-3 mb-lg-0">
                                
                                    <img src="{{asset('storage/image/' .$histShow->picture)}}" width="170" height="160" alt="" class="rounded">
                               
                            </div>

                            <div class="media-body ">
                                <h6 class="media-title font-weight-semibold">
                                    <p href="#" data-abc="true">Name: <strong>{{$histShow->name}}</strong></p>
                                    <p href="#" data-abc="true">type voiture : <strong> {{$histShow->typeVoiture}}</strong></p>
                                    <p href="#" data-abc="true">date voyager: <strong> {{$histShow->dateDepart}}</strong></p>
                                </h6>

                               

                                <p class="card-text"><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24"><g fill="none" stroke="#ff6900" stroke-width="2"><path d="M5 8.515C5 4.917 8.134 2 12 2s7 2.917 7 6.515c0 3.57-2.234 7.735-5.72 9.225a3.277 3.277 0 0 1-2.56 0C7.234 16.25 5 12.084 5 8.515Z"></path><path d="M14 9a2 2 0 1 1-4 0a2 2 0 0 1 4 0Z"></path><path stroke-linecap="round" d="M20.96 15.5c.666.602 1.04 1.282 1.04 2c0 2.485-4.477 4.5-10 4.5S2 19.985 2 17.5c0-.718.374-1.398 1.04-2"></path></g></svg>{{$histShow->depart}} ———————————————————————— <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24"><g fill="none" stroke="#ff6900" stroke-width="2"><path d="M5 8.515C5 4.917 8.134 2 12 2s7 2.917 7 6.515c0 3.57-2.234 7.735-5.72 9.225a3.277 3.277 0 0 1-2.56 0C7.234 16.25 5 12.084 5 8.515Z"></path><path d="M14 9a2 2 0 1 1-4 0a2 2 0 0 1 4 0Z"></path><path stroke-linecap="round" d="M20.96 15.5c.666.602 1.04 1.282 1.04 2c0 2.485-4.477 4.5-10 4.5S2 19.985 2 17.5c0-.718.374-1.398 1.04-2"></path></g></svg> {{$histShow->arrive}}</p>
                            </div>

                            <div class="border-end border-1" style="height: 160px;"></div>

                            <div class="mt-3 mt-lg-0 ml-lg-3 text-center" style=" width: 250px">
                                <h3 class="mb-0 font-weight-semibold">612.99 <sup>DH</sup></h3>
                              
                                
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>

                                

                                <span>  {{$histShow->rating}}</span>
                                <p  class="btn btn-success mt-4 text-white"><i class="icon-cart-add mr-2"></i>merci pour votre confiance</p>

                            </div>

                        </div>
                    </div>    

                         
    </div>                     
    </div>
</div>
@endforeach

@endsection