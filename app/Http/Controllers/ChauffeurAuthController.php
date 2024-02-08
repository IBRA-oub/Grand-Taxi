<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChauffeurAuthController extends Controller
{
    public function chauffeurRegister(){

        return view('auth/chauffeurRegister');
    }

    public function chauffeurRegisterSave(Request $request){
        
    }
}