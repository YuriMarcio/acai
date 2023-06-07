<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\InternalUser as ModelsInternalUser;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Http\Models\InternalUser;

class LoginController extends Controller
{

    public function index(){
        return view('dashboard.login');
    }
    public function store(Request $request){
        $regras = [
            'usuario' => 'email',
            'senha' => 'password',
        ];

        $feedback = [
            'usario.email' => 'e-mail invalido',
            'password.required' => 'e-mail invalido',
        ];

        $request->validate($regras,$feedback);

        print_r($request->all());

        // $email = $request->get('email');
        // $password = $request->get('password');

        // echo "Usuario : $email | Senha : $password";
        // echo '<br>';

        // $intUser = new User();

        // $existe = $intUser->where('email', $email)->where('password',$password);

        // echo '<pre>';
        // print_r($existe);
        // echo '<pre>';

    }
    public function logout(){

    }
    public function logged(){
        return view('dashboard.logged');
    }
}
