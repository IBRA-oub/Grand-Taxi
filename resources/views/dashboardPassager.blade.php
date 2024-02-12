@extends('layoutsPassager.app')

@section('title')

@section('contents')

<div class="container mt-5">
    <form class="row g-3 align-items-center search-bar border rounded shadow p-3">
        <div class="col">
            <label for="depart" class="form-label" style="color: black;">Départ</label>
            <input type="text" class="form-control" id="depart" placeholder="Entrez le lieu de départ">
        </div>
        <div class="col">
            <label for="arrivee" class="form-label" style="color: black;">Arrivée</label>
            <input type="text" class="form-control" id="arrivee" placeholder="Entrez le lieu d'arrivée">
        </div>
        <div class="col">
            <label for="date" class="form-label" style="color: black;">Date</label>
            <input type="date" class="form-control" id="date">
        </div>
        
            <button type="submit" class="rounded font-semibold border-2 border-white shadow flex items-center gap-2 h-full px-6 rounded-full bg-primary text-lg text-white">
                Rechercher 
                <svg class="" xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M10 18a7.952 7.952 0 0 0 4.897-1.688l4.396 4.396l1.414-1.414l-4.396-4.396A7.952 7.952 0 0 0 18 10c0-4.411-3.589-8-8-8s-8 3.589-8 8s3.589 8 8 8zm0-14c3.309 0 6 2.691 6 6s-2.691 6-6 6s-6-2.691-6-6s2.691-6 6-6z"></path>
                    <path fill="currentColor" d="M11.412 8.586c.379.38.588.882.588 1.414h2a3.977 3.977 0 0 0-1.174-2.828c-1.514-1.512-4.139-1.512-5.652 0l1.412 1.416c.76-.758 2.07-.756 2.826-.002z"></path>
                </svg>
            </button>
            
        
    </form>
</div>


    
@endsection