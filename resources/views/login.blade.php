@extends('base')
@section('title')
Login
@endsection
@section('content')
<body id="login">
    @if ($message = Session::get('loginError'))
        <x-notification type="error" :message="$message"/>
    @endif

    <div class="loginMobile h-full">
            <img src="{{ asset('img/backLogin.jpg') }}" class="object-cover max-h-full w-full h-96 md:h-screen md:w-full " alt="">
            <div class="layer"></div>
            <div class="flex absolute flex-col md:flex-row gap-1 bottom-0 left-0 w-full h-full">
                <div class=" flex flex-col sm:flex-row sm:gap-5 sm:justify-center sm:items-center md:flex-col md:items-start md:relative md:bottom-20 md:gap-16 p-3">
                    <img src="{{ asset('img/logo/logo.jpg ') }}" class="max-h-40 w-2/12 md:w-2/12 rounded-full" alt="">
                    <p class="text-xl sm:text-3xl md:text-5xl xl:text-6xl text-white w-full md:leading-[3.7rem]">Aqui você adoça a sua vida com a melhor sobremesa</p>
                </div>
                <div class="modelMobile bg-white h-full  flex flex-col gap-3 md:gap-5 w-full rounded-t-3xl md:rounded-l-3xl md: p-5 md:justify-center">
                    <h1 class="text-lg md:text-2xl font-medium ">Login</h1>
                    @error('error')
                            <span>{{$message}}</span>
                    @enderror
                    <form class="flex flex-col gap-3 w-full md:gap-11" action={{ route('login.Validation') }}  method="post">
                        @csrf
                        <div>
                            <label for="email" class="block mb-2 text-fuchsia-500 text-sm font-medium ">Email/Cpf</label>
                            <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700" placeholder="Seu email ou cpf" required="">
                        </div>
                        <div>
                            <label for="password" class="block mb-2 text-fuchsia-500 text-sm font-medium ">Senha</label>
                            <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700" required="">
                        </div>
                        <div class="flex flex-col mini:flex-row gap-4 items-start justify-between">
                            <div class="flex items-start">
                                <div class="flex items-center h-5">
                                  <input id="remember" aria-describedby="remember" type="checkbox" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-primary-600 dark:ring-offset-gray-800" >
                                </div>
                                <div class="ml-3 text-sm">
                                  <label for="remember" class="text-gray-500 dark:text-gray-300">Lembre de mim</label>
                                </div>
                            </div>
                            <a  class="text-sm font-medium text-primary-600 hover:underline dark:text-primary-500">Esqueceu sua senha ?</a>
                        </div>
                        <div class="w-full flex justify-center items-center">
                            <button type="submit" class="w-3/5 shadowRounded bg-gray-200/30  text-fuchsia-500  hover:bg-primary-700 focus:ring-2 focus:outline-none focus:ring-fuchsia-500 font-medium rounded-lg text-lg px-5 py-2.5 text-center hover:bg-fuchsia-200">Entrar</button>
                        </div>
                        <p class="text-sm font-light text-gray-500 relative top-6">
                            Ainda não tem cadastro? <a href="{{ route('deliveryRegister') }}" class="font-medium text-fuchsia-500 hover:underline ">Cadastre-se</a>
                        </p>
                    </form>
                </div>
            </div>
    </div>

</body>
@endsection
