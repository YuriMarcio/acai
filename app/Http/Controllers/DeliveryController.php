<?php

namespace App\Http\Controllers;
use App\Models\categoria;
use App\models\pedido;
use App\Http\Controllers\Controller;
use App\Models\produto;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DeliveryController extends Controller
{
    public function delivery(){
        $produtoCopo = Produto::whereHas('categoria', function($query){
            $query->where('nome','copo');
        })->get();
        $produtoAcompanhameto = Produto::whereHas('categoria', function($query){
            $query->where('nome','acompanhamento');
        })->get();
        $produtoCalda = Produto::whereHas('categoria', function($query){
            $query->where('nome','creme');
        })->get();
        return view('delivery',['copo'=>$produtoCopo,'acompanhamento'=>$produtoAcompanhameto,'creme'=>$produtoCalda]);
    }

    public function deliveryLogin(){
        return view('login');
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('home');
    }
    public function deliveryRegister(){
        return view('registerFull');
    }
    public function loginValidation(Request $request){
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ],[
            'email.required' => 'O campo Email é obirgatorio',
            'email.email' => 'Esse campo tem que ter um email valido',
            'password.required' => 'o campo Senha é obirgatorio',
        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            $user = DB::table("users")->where("email","=",$request->email)->first();

            session(["nome" => $user->name]);
            session(["email"=> $user->email]);
            session(["phone"=> $user->phone]);
            session(["endereco" => $user->address]);
            session(["cpf"=> $user->cpf]);
            session(["imageProfile"=> $user->imageProfile]);

            return redirect()->intended();
        }else{
            return redirect()->back()->with('loginError','Email ou senha invalida ');
        }


            //CASO APLIQUE A LOGICA DE COOKIE MANUAL COMEÇAR POR AQUI
            // if($remember){
            //     $cookie = cookie('login_credentials', json_encode($credentials), 60*24*12);
            //     return redirect()->route('login.logged')->withCookie($cookie);
            // }

    }

    public function registerValidation(Request $request){

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8',
            'address' => 'required|string',
            'phone' => 'required|string',
            'cpf' => 'nullable|regex:/^\d{3}\.\d{3}\.\d{3}\-\d{2}$/',
            'imageProfile' => 'nullable|file|mimes:png,jpg|max:3080', // Corrigido para 'imageProfile'
        ],[
            'name.required' => 'O campo Nome é obrigatório.',
            'name.max' => 'O campo Nome não pode ter mais de 255 caracteres.',
            'email.required' => 'O campo Email é obrigatório.',
            'email.email' => 'O campo Email deve ser um endereço de e-mail válido.',
            'email.unique' => 'Este endereço de e-mail já está em uso.',
            'password.required' => 'O campo Senha é obrigatório.',
            'password.min' => 'O campo Senha deve ter pelo menos 8 caracteres.',
            'address.required' => 'O campo Endereço é obrigatório.',
            'phone.required' => 'O campo Telefone é obrigatório.',
            'cpf.regex' => 'O campo CPF deve estar no formato "xxx.xxx.xxx-xx" (formato brasileiro) ou deixado em branco.',
            'imageProfile.required' => 'A imagem do produto é obrigatória.',
            'imageProfile.file' => 'O arquivo da imagem do produto deve ser um arquivo válido.',
            'imageProfile.mimes' => 'A imagem do produto deve ser um arquivo PNG ou JPG.',
            'imageProfile.max' => 'A imagem do produto não pode exceder 2MB.',
        ]);

        $password = bcrypt($request->input('password')); // Corrija para usar bcrypt
        $number = preg_replace('/[^0-9]/','', $request->input('phone'));
        $email = $request->input('email');
        $cpf = $request->input('cpf');

        $user = new User();
        $user->name = $request->input('name');
        $user->password = $password;
        $user->address = $request->input('address');
        $user->phone = $number;

        if(User::where('cpf',$cpf)->exists()){
            return redirect()->route('deliveryRegister')->with('errorRegister','CPF já existe');
        } else {
            $user->cpf = $cpf;
        }

        if(User::where('email',$email)->exists()){
            print_r("passou Email");
            return redirect()->route('deliveryRegister')->with('errorRegister','Email já existe');
        } else {
            print_r("negado Email");

            $user->email = $email;
        }

        if($request->hasFile('imageProfile') && $request->file('imageProfile')->isValid()) {
            $image = $request->file('imageProfile'); // Corrija para 'file'
            $extension = $image->getClientOriginalExtension();
            $imageName = md5($image->getClientOriginalName() . strtotime("now")) . "." . $extension;
            $image->move(public_path('img/productImg'), $imageName);

            $user->imageProfile = $imageName;
        }



        $user->save();

        return redirect()->route('login')->with('success','Registro criado');
    }
}
