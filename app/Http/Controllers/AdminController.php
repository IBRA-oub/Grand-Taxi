<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\reservation;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function statistique()
    {
        $reservationStatistique =DB::table('reservations')->count();
        $chauffeurStatistique =DB::table('users')->where('role','chauffeur')
        ->count();
        $passagerStatistique =DB::table('users')->where('role','passager')
        ->count();
         return view('dashboardAdmin',['reservationStatistique' => $reservationStatistique , 'chauffeurStatistique' => $chauffeurStatistique , 'passagerStatistique'=> $passagerStatistique]);
    }



    function showChauffeur(){
        $chauffeur = User::orderBy('created_at' , 'DESC')
        ->where('role','chauffeur')
        ->where('softdelete','0')
        ->get();
        return view('adminPages/adminChauffeurs',['chauffeur'=>$chauffeur]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function archiver(Request $request, $id)
    {
        $archiverChauffeur = User::findOrFail($id);

        $archiverChauffeur->softdelete ='1';
        
        $archiverChauffeur->save();
        
        return redirect()->route('adminChauffeurs')->with('success','chauffeur archiver successfuly');
        
    }


    function showPassager(){
        $passager = User::orderBy('created_at' , 'DESC')
        ->where('role','passager')
        ->where('softdelete','0')
        ->get();
        return view('adminPages/adminPassagers',['passager'=>$passager]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function archiverPassager(Request $request, $id)
    {
        $archiverPassager = User::findOrFail($id);

        $archiverPassager->softdelete ='1';
        
        $archiverPassager->save();
        
        return redirect()->route('adminPassagers')->with('success','passagers archiver successfuly');
        
    }

    function showreservation(){
        $reservation = DB::table('users')
        ->join('reservations', 'users.id', '=', 'reservations.chauffeur_id')
        ->get();
        
         return view('adminPages/adminReservation',['reservation'=>$reservation]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function archiverReservation(Request $request, $id)
    {
        $archiverReservation = User::findOrFail($id);

        $archiverReservation->softdelete ='1';
        
        $archiverReservation->save();
        
        return redirect()->route('adminReservation')->with('success','reservation archiver successfuly');
        
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
        $adminProfile = User::findOrFail($id);
        $adminProfile->update($request->all());

        return redirect()->route('adminProfile')->with('success','adminProfile updated successfuly');
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
    public function adminProfile(){
        
        return view('adminPages/adminProfile');
     }
     
    public function adminPassagers(){
        
        return view('adminPages/adminPassagers');
     }
    //  public function adminChauffeurs(){
        
    //     return view('adminPages/adminChauffeurs');
    //  }
     public function adminReservation(){
        
        return view('adminPages/adminReservation');
     }
     
}