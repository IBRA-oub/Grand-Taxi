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
        ->get();

        
      
         return view('passagerPages/passagerReservation', ['reservations'=> $reservations]);
       
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

        
        return redirect()->route('passagerPages')->with('success','you are reservated successfuly');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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

        $ratingUpdate->name = $request->input('rating');
        $ratingUpdate->historique = '1';
        
        $ratingUpdate->save();
        
        return redirect()->route('passagerHistorique')->with('success','reservation complet successfuly');
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