<?php

namespace App\Http\Controllers;

use App\Models\Passager;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Auth;
class PassagerAuthController extends Controller
{
    public function passagerRegister(){

        return view('auth/passagerRegister');
    }

    public function passagerRegisterSave(Request $request){
        
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'phone' => 'required',
            'picture_passager' => ['required', 'image', 'mimes:jpeg,png,jpg,gif,webp', 'max:2048'] 
           
        ]);


        $passagers = new passager();
        $passagers->name = $request->input('name');
        $passagers->email = $request->input('email');
        $passagers->password = $request->input('password');
        $passagers->phone = $request->input('phone');
        
        if ($request->hasFile('picture_passager')) {
            $file = $request->file('picture_passager');
            $pictureName = time() . '.' . $file->extension();
            $file->storeAs('public/image', $pictureName);
            $passagers->picture_passager = $pictureName;
        }
        
        $passagers->save();

        return redirect()->route('loginPassager');
        
    }

    public function loginPassager(){
        return view('auth/loginPassager');
    }

    

    public function loginPassagerAction(Request $request){
        
        $request->validate([
        'email' => 'required|email',
        'password' => 'required'
        ]);
    
    if(!Auth::attempt($request->only('email','password'),$request->boolean('remember'))){
        throw ValidationException::withMessages([
            'email' => trans('auth.failed')
        ]);
    }

    $request->session()->regenerate();

    return redirect()->route('dashboard');
    
     }
}