<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
   public function loginFormulario(){
    return view('home')->with('view','login');
   }

   public function login(Request $request){
    $credenciales = $request->only('email', 'password');

    if(Auth::attempt($credenciales)){
        return redirect()->intended('documentos');
    }

    return back()->withErrors([
        'email'=> 'Las credenciales son incorrectas por favor verifiquelas',
    ]);

   }

   public function crearFormulario(){
    return view('home')->with('view', 'create');
   }

   public function logout(Request $request){
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect('login');
   }
}
