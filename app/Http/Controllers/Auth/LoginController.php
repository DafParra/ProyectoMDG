<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /*
    public function login(Request $request){

        //attempt consulta en BD si existe el usuario con email y password ingresados
        if (Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')]) && Auth::check()
        && Auth::user()->idTipoUsuario== '2') {
        //usuario autenticado
        
        }else if(Auth::check() && Auth::user()->idTipoUsuario== '1'){
            return redirect('servicios.index');
        }
        else{
            //Usuario no autenticado
            return redirect()->route('login.form')->with('mensaje', "Usuario no reconocido");
        }

    }
    */
}
