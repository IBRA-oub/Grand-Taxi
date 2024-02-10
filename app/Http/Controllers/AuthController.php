<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Auth;
class AuthController extends Controller
{
    public function register(){

        return view('auth/register');
    }

    public function registerSave(Request $request){
        
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'phone' => 'required',
            'role' => 'required',
            'picture' => ['required', 'image', 'mimes:jpeg,png,jpg,gif,webp', 'max:2048'] 
           
        ]);


        $users = new user();
        $users->name = $request->input('name');
        $users->email = $request->input('email');
        $password = $request->input('password');

        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $users->password = $hashedPassword;
        $users->phone = $request->input('phone');

        $users->role = $request->input('role');
        
        if ($request->hasFile('picture')) {
            $file = $request->file('picture');
            $pictureName = time() . '.' . $file->extension();
            $file->storeAs('public/image', $pictureName);
            $users->picture = $pictureName;
        }
        
        $users->save();

        return redirect()->route('login');
        
    }

    public function login(){
        return view('auth/login');
    }

    

    public function loginAction(Request $request) {
        Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ])->validate();
    
        if(!Auth::attempt($request->only('email','password'),$request->boolean('remember'))){
            throw ValidationException::withMessages([
                'email' => trans('auth.failed')
            ]);
        }
    
        $request->session()->regenerate();

        $user = Auth::user();

        // Vérifier le rôle de l'utilisateur et rediriger en conséquence
        if($user->role === 'chauffeur') {
            return redirect()->route('dashboardChauffeur');
        } elseif($user->role === 'passager') {
            return redirect()->route('dashboardPassager');
        }elseif($user->role === 'admin') {
            return redirect()->route('dashboardAdmin');
        }
    
    }

    public function logout(Request $request){
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        return redirect('/');
     }
}