<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    
    public function index(){
  
        return view('pages.auth.login');                   
        
    }

    public function login(Request $request){

        try {
                       
            $validator = Validator::make( $request->all() , [                
                'email' => ['required', 'string', 'email', 'max:100', /*'unique:users'*/],
                'password' => ['required', 'string', 'min:6'],
            ]);

            if ($validator->fails()) {

                return back()->withErrors($validator)->withInput(); 

            }

            $credentials = request()->only('email','password');

            if(Auth::attempt($credentials)){

                request()->session()->regenerate();
                return redirect()->route("home");

            }

            return back()->with("message", "El usuario o la contraseña que haz ingresado no son correctas, por favor vuelva a intentarlo.")->withInput();
            
        } catch (Exception  $e) {
            
            Log::debug($e->getMessage());
 
            throw ValidationException::withMessages([
                'error' => __('Algo salió mal, por favor recargue la página y vuelva a intentarlo.'),
            ]);

        }
                       
    }

    public function logout(){

        Auth::logout();  
        return redirect()->route('login');

    }
    
}