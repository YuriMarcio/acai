<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\InternalUser;
use Illuminate\Console\View\Components\Alert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

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
        $authenticated = DB::table('Internal_Users')
        ->where('email', $credentials['email'])
        ->where('password', $credentials['password'])->first();

        if(!$authenticated){
            return redirect()->route('login.index')->withErrors(['error'=>'email ou senha invalida']);
        }else{
            Session::put('nome', $authenticated->nome);
            Session::put('email', $authenticated->email);
            Session::put('cargo', $authenticated->cargo);
            Session::put('id', $authenticated->id);
            return redirect()->route('login.logged')->with('success','logged in');
        }
    }
    public function destroy(){
        session_destroy();
        return redirect()->route('login.index');
    }
    public function logged(){
        return view('dashboard.logged');
    }
}
