<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class PassagerAuthController extends Controller
{
    public function passagerRegister(){

        return view('auth/passagerRegister');
    }

    public function passagerRegisterSave(Request $request){
        
        validator::make($request ->all(),[
            
        ]);
    }
}