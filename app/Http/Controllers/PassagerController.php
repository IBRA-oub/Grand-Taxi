<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Reservation;
use Illuminate\Support\Facades\DB;

class PassagerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
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
    public function update(Request $request, $id)
    {
        $chauffeurProfile = User::findOrFail($id);

        $chauffeurProfile->name = $request->input('name');
        $chauffeurProfile->phone = $request->input('phone');
        
        
        $chauffeurProfile->save();
        
        return redirect()->route('passagerProfile')->with('success','passager Profile updated successfuly');
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

    public function passagerProfile(){
        
        return view('passagerPages/passagerProfile');
     }
     
  
     public function passagerHistorique(){
        
        return view('passagerPages/passagerHistorique');
     }
    //  public function passagerReservation(){
        
    //     return view('passagerPages/passagerReservation');
    //  }

     public function passagerFavorite(){
        
        return view('passagerPages/passagerFavorite');
     }
     public function passagerRating( $id){
        
        return view('passagerPages/passagerRating', ['id' => $id]);
     }

     public function passagerSearsh(){
        
        return view('passagerPages/passagerSearsh');
     }

     public function search(Request $request){
        $depart= $request->input('depart');
        $arrive = $request->input('arrive');
        $date = $request->input('date');
        $utilisateurs = User::where('depart', $depart)
        ->where('arrive', $arrive)
        ->where('dateDepart', $date)
        ->where('status','disponible')
        ->get();

        $ratings = DB::table('users')
        ->join('reservations', 'users.id', '=', 'reservations.chauffeur_id')
        ->select(DB::raw('ROUND(AVG(rating), 1) as moyenne_etoiles'))
        ->groupBy('users.id')
        ->get();
        

        return view('passagerPages/passagerSearsh', ['utilisateurs'=> $utilisateurs , 'ratings'=> $ratings]);
    }

    public function searchRapide(Request $request){
        $depart= $request->input('depart');
        $arrive = $request->input('arrive');
        
        $utilisateurs = User::where('depart', $depart)
        ->where('arrive', $arrive)
        
        ->where('status','disponible')
        ->get();

        return view('passagerPages/passagerSearsh', ['utilisateurs'=> $utilisateurs]);
    }

    public function searchVoiture(Request $request){
        $typeVoiture= $request->input('voitureSearsh');
        
            
        $utilisateurs = User::where('typeVoiture', '%' .$typeVoiture. '%')
        ->where('status','disponible')
        ->get();

        return view('passagerPages/passagerSearsh', ['utilisateurs'=> $utilisateurs]);
    }
}