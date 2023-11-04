<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\InternalUser;
use Illuminate\Console\View\Components\Alert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Cookie;


class LoginController extends Controller
{
    public function index(){
        return view('dashboard.login');
    }
    public function store(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ],[
            'email.required' => 'O campo Email é obirgatorio',
            'email.email' => 'Esse campo tem que ter um email valido',
            'password.required' => 'o campo Senha é obirgatorio',
        ]);
        $credentials = $request->only('email','password');
        // $remember = $request->has('remember');
        $authenticated = DB::table('Internal_Users')
        ->where('email', $credentials['email'])
        ->where('password', $credentials['password'])->first();

        if(!$authenticated){
            return redirect()->route('login.index')->withErrors(['error'=>'email ou senha invalida']);
        }else{
                session(['nome' => $authenticated->nome]);
                session(['email' => $authenticated->email]);
                session(['cargo' => $authenticated->cargo]);
                session(['id' => $authenticated->id]);

            //CASO APLIQUE A LOGICA DE COOKIE MANUAL COMEÇAR POR AQUI
            // if($remember){
            //     $cookie = cookie('login_credentials', json_encode($credentials), 60*24*12);
            //     return redirect()->route('login.logged')->withCookie($cookie);
            // }

            return redirect()->route('dash.pdv');
        }
    }
    public function destroy(){
        session()->flush();
        return redirect()->route('login.index');
    }
    public function logged(){
        $email = session()->get('email');
        return view('dashboard.logged');
    }
}
