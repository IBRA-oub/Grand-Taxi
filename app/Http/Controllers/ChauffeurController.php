<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ChauffeurController extends Controller
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
        $chauffeurProfile->typePayement = $request->input('typePayement');
        $chauffeurProfile->matricule = $request->input('matricule');
        $chauffeurProfile->typeVoiture = $request->input('typeVoiture');
        $chauffeurProfile->description = $request->input('description');
        $chauffeurProfile->depart = $request->input('depart');
        $chauffeurProfile->arrive = $request->input('arrive');
        $chauffeurProfile->dateDepart = $request->input('dateDepart');
        
        
        $chauffeurProfile->save();
        
        return redirect()->route('chauffeurProfile')->with('success','chauffeur Profile updated successfuly');
    }

    public function  updateStatus(Request $request, $id)
    {
        
         
        $chauffeurProfile = User::findOrFail($id);

        $chauffeurProfile->status = $request->input('status');
        
        $chauffeurProfile->save();
        
        return redirect()->route('dashboardChauffeur')->with('success','chauffeur Profile updated successfuly');
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

    public function chauffeurProfile(){
        
        return view('chauffeurPages/chauffeurProfile');
     }
     
  
     public function chauffeurHistorique(){
        
        return view('chauffeurPages/chauffeurHistorique');
     }
     public function chauffeurReservation(){
        
        return view('chauffeurPages/chauffeurReservation');
     }
}