@extends('base')

@section('title') login @endsection

@section('content')
     <section class="  h-screen w-full md:grid md:grid-cols-2">
        <div class='background_log w-full h-full relative  object-cover'>
            <img src="{{ asset('./img/backgroundlogin.jpg') }}" alt="" class="w-full h-full object-cover object-center hidden md:block">
            <section class="loginMobile block md:hidden">
                <img src="{{ asset('./img/backgroundlogin.jpg') }}" alt="" class="w-full object-cover object-center max-h-[29rem] ">
                <div class="log md:hidden absolute bottom-0 max-h-[904px] rounded-tl-[200px] pt-10 bg-white w-full h-full flex justify-center items-center ">
                    <form action={{ route('login.store') }}  method="post" class="w-full h-full text-3xl md:bg-white md:w-4/6 md:rounded-md flex flex-col justify-center gap-4  md:gap-y-8  p-4">
                        @csrf

                        <div class="mb-16 w-full flex justify-center items-center  ">
                            <img src="{{ asset('img/logo/logo.jpg ') }}" class="max-h-40 w-40 hidden md:block md:max-h-20 md:w-20 h-full rounded-full" alt="">
                            <h1 class="block font-bold text-4xl md:hidden" >Login</h1>
                        </div>
                        <span class="font-semibold">Email/Cpf :</span>
                        <input name="email" class="h-24  mb-12 rounded-md bg-gray-100 p-4 md:h-14 md:text-lg" type="text">
                        <span class="font-semibold">Senha :</span>
                        <input name="password" class="h-24  mb-12 rounded-md bg-gray-100 p-4 md:h-14 md:text-lg" type="password">
                        <div class="remember text-2xl mb-6">
                            <input type="checkbox" class="default:ring-2" name="remember" id=""> <span>lembrar de mim</span>
                        </div>
                        <div class=" text-2xl mb-6 text-slate-400">
                            <p>Obs : Se estiver logando pela primeira utilize o login e senha que seu administrador informou</p>
                        </div>
                        <button type="submit" class="h-24 font-semibold text-4xl rounded-md bg-purple-400 cursor-pointer" >login</button>
                    </form>
                </div>
            </section>
        </div>
        <div class="log w-full h-full  justify-center items-center md:flex hidden md:block">
            <form action="{{route('login.store')}}" method="POST" class="bg-white w-4/6  rounded-md flex flex-col justify-center gap-4 gap-y-8  p-4">
                @csrf
                @error('logerror')
                    <span>{{ $message }}</span>
                @enderror
                <div class="w-full flex justify-center items-center">
                    <img src="{{ asset('img/logo/logo.jpg ') }}" class="max-h-20 w-20 h-full rounded-full" alt="">
                </div>
                <input name="email" class="h-14 rounded-md p-4 text-lg bg-gray-100" type="text">
                <input name="password" class="h-14 rounded-md p-4 text-lg bg-gray-100" type="password">
                <div class="remember">
                    <input type="checkbox" class="default:ring-2" name="remember" id=""> <span>lembrar de mim</span>
                </div>
                <div class="text-sm">
                    <p>Obs : Se estiver logando pela primeira utilize o login e senha que seu administrador informou</p>
                </div>
                <button type="submit" class="h-14 rounded-md bg-purple-400 cursor-pointer">Login</button>
            </form>
        </div>
    </section>
@endsection


