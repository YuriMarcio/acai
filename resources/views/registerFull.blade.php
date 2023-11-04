@extends('base')
@section('title')
Cadastro
@endsection
@section('content')
<body id="login">
    <div class="loginMobile h-full">
        @if ($message = Session::get('errorRegister'))
        <x-notification type="error" :message="$message"/>
        @endif

        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <x-notification type="error" :message="$error"/>
            @endforeach
        @endif

        <img src="{{ asset('img/backLogin.jpg') }}" class="object-cover max-h-full w-full h-96 md:h-screen md:w-full " alt="">
        <div class="layer"></div>
        <div class="flex absolute flex-col md:flex-row gap-1 bottom-0 left-0 w-full h-full">
            <div class=" flex flex-col sm:flex-row sm:gap-5 sm:justify-center sm:items-center md:flex-col md:items-start md:relative md:bottom-20 md:gap-16 p-3">
                <img src="{{ asset('img/logo/logo.jpg ') }}" class="max-h-40 w-2/12 md:w-2/12 rounded-full" alt="">
                <p class="text-xl sm:text-3xl md:text-5xl xl:text-6xl text-white w-full md:leading-[3.7rem]">Aqui você adoça a sua vida com a melhor sobremesa</p>
            </div>
            <div class="modelMobile bg-white h-full  flex flex-col gap-3 md:gap-10 w-full rounded-t-3xl md:rounded-l-3xl md: p-5 md:justify-center">
                <h1 class="text-lg md:text-2xl font-medium ">Registrar</h1>

                <form class="grid grid-cols-2 gap-3 w-full md:gap-12" enctype="multipart/form-data"  action={{ route('register.Validation') }}   method="post">

                    @csrf
                    {{-- name --}}
                    <div>
                        <label for="name" class="block mb-2 text-fuchsia-500 text-sm font-medium ">Nome</label>
                        <input type="name" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700" placeholder="nome" required="">
                    </div>
                    {{-- email --}}
                    <div>
                        <label for="email" class="block mb-2 text-fuchsia-500 text-sm font-medium ">Email</label>
                        <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700" placeholder="E-mail" required="">
                    </div>
                    {{-- password --}}
                    <div>
                        <label for="password" class="block mb-2 text-fuchsia-500 text-sm font-medium ">Senha</label>
                        <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700" required="">
                    </div>
                    {{-- address --}}
                    <div>
                        <label for="address" class="block mb-2 text-fuchsia-500 text-sm font-medium ">Endereço</label>
                        <input type="address" name="address" id="address" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700" placeholder="Avenida Alameda das Travessas, nº 111,Bairro dos Barris. CEP: 40000-000. Salvador - Bahia" required="">
                    </div>
                    {{-- phone --}}
                    <div>
                        <label for="phone" class="block mb-2 text-fuchsia-500 text-sm font-medium ">Telefone</label>
                        <input type="phone" name="phone" id="phone" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700" placeholder="(98) 90000-0000" required="">
                    </div>
                    {{-- Cpf --}}
                    <div>
                        <div class="w-full flex justify-start items-center">
                            <label for="cpf" class="block mb-2 text-fuchsia-500 text-sm font-medium ">Cpf </label>
                            <p><button data-popover-target="popover-description" data-popover-placement="bottom-end" type="button"><svg class="w-4 h-4 ml-2 text-gray-400 hover:text-gray-500" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path></svg><span class="sr-only">Show information</span></button></p>
                            <div data-popover id="popover-description" role="tooltip" class="absolute z-10 invisible inline-block text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 w-72 dark:bg-gray-800 dark:border-gray-600 dark:text-gray-400">
                                <div class="p-3 space-y-2">
                                    <h3 class="font-semibold text-gray-900 dark:text-white">O cpf não é obrigatorio ! E Porque pedimos o cpf ?</h3>
                                    <p>Quando você insere seu CPF, você se cadastra automaticamente em nosso sistema de pontos. A cada R$10 em compras, você ganha pontos. Acumule uma quantidade específica de pontos e poderá trocá-los por produtos, além de desfrutar de cupons e descontos exclusivos.</p>

                                </div>
                            </div>
                        </div>
                        <input type="cpf" name="cpf" id="cpf" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700" placeholder="888.888.888.88">
                    </div>
                    <div class="imageProfile flex flex-col">
                        <span class="text-base text-slate-400">Perfil</span>
                        <input type="file" name="imageProfile" id="imageProfile" class="rounded-xl">
                    </div>

                    <div class="w-full flex justify-center items-center">
                        <button type="submit" class="w-3/5 shadowRounded bg-gray-200/30  text-fuchsia-500  hover:bg-primary-700 focus:ring-2 focus:outline-none focus:ring-fuchsia-500 font-medium rounded-lg text-lg px-5 py-2.5 text-center hover:bg-fuchsia-200">Registrar</button>
                    </div>
                    <p class="text-sm font-light text-gray-500 relative top-6">
                        Já possui cadastro ? <a href="{{ route('login') }}" class="font-medium text-fuchsia-500 hover:underline ">login</a>
                    </p>
                </form>
            </div>
        </div>
    </div>


</body>
@endsection
