<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\reservation;
use Illuminate\Support\Facades\DB;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reservations = DB::table('users')
        ->join('reservations', 'users.id', '=', 'reservations.chauffeur_id')
        ->where('reservations.softdelete','0')
        ->get();

        
         return view('passagerPages/passagerReservation', ['reservations'=> $reservations]);
       
    }


     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexChauffeur()
    {
        $chauffeurId = auth()->id();
        
        $reservations = DB::table('users')
        ->join('reservations', 'users.id', '=', 'reservations.passager_id')
        ->where('reservations.chauffeur_id', $chauffeurId)
        ->where('reservations.softdelete','0')
        ->get();

       
        
         return view('chauffeurPages/chauffeurReservation', ['reservations'=> $reservations]);
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    //    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $reservation = new reservation();
        $reservation->depart = $request->input('depart');
        $reservation->arrive = $request->input('arrive');
        $reservation->chauffeur_id = $request->input('chauffeur_id');
        $reservation->passager_id = $request->input('passager_id');
        $reservation->softdelete ='0';
        $reservation->historique ='0';
        $reservation->favorite ='0';
        
        
        $reservation->save();

        
        return redirect()->route('passagerReservation')->with('success','you are reservated successfuly');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function historiqueShow()
    {
        
        $historiqueShow = DB::table('users')
         ->join('reservations', 'users.id', '=', 'reservations.chauffeur_id')
         ->where('historique','1')->get();
        
         return view('passagerPages/passagerHistorique', ['historiqueShow'=> $historiqueShow]);
    }

    public function historiqueChauffeur()
    {
        $chauffeurId = auth()->id();
        $historiqueChauffeur = DB::table('users')
         ->join('reservations', 'users.id', '=', 'reservations.passager_id')
         ->where('historique','1')
         ->where('reservations.chauffeur_id', $chauffeurId) 
         ->get();
        
         return view('chauffeurPages/chauffeurHistorique', ['historiqueChauffeur'=> $historiqueChauffeur]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function ratingChauffeur()
{
    $chauffeurId = auth()->id(); 

    $ratingChauffeur = DB::table('users')
        ->join('reservations', 'users.id', '=', 'reservations.chauffeur_id')
        ->select(DB::raw('ROUND(AVG(reservations.rating), 1) as moyenne_etoiles'))
        ->where('reservations.chauffeur_id', $chauffeurId) 
        ->groupBy('users.id')
        ->first();
       
     return view('chauffeurPages/chauffeurProfile', ['ratingChauffeur'=> $ratingChauffeur]);
    }
     
     /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $ratingUpdate = reservation::findOrFail($id);

        $ratingUpdate->rating = $request->input('rating');
        $ratingUpdate->historique = '1';
        
        $ratingUpdate->save();
        
        return redirect()->route('passagerHistorique')->with('success','reservation complet successfuly');
    }

     /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function favoriteUpdate(Request $request,$id)
    {
        $favoriteUpdate = reservation::findOrFail($id);

        $favoriteUpdate->favorite = '1';
        
        
        $favoriteUpdate->save();
        
        return redirect()->route('passagerFavorite')->with('success','route add to favorite successfuly');
    }

    public function FavoriteShow()
    {
        $favoriteShow = DB::table('users')
         ->join('reservations', 'users.id', '=', 'reservations.chauffeur_id')
         ->where('favorite','1')->get();
        
         return view('passagerPages/passagerFavorite', ['favoriteShow'=> $favoriteShow]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}