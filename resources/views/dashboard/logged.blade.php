@extends('base')

@section('title') dashboard @endsection

@section('content')
    <section class="divisories grid grid-cols-6">
        <div class="leftMenucol-span-1 h-screen ">
            <div class="fixed h-screen bg-white top-0 left-0 w-[213px] p-4">
                <div class="logo mb-8">
                    <img src="{{ asset('img/logo/logo.jpg') }}" class="rounded-full max-h-12" alt="Imagem">
                </div>
                <nav>
                    <ul class="menu flex flex-col gap-y-4 ">
                        <span><h1 class="text-base font-medium">MENU</h1></span>
                        <li class="flex justify-start itens-center hover:bg-blue-500 hover:text-white p-2 ps-1 text-sm rounded-xl font-semibold text-gray-400 gap-x-2  ">
                            <span class="material-symbols-outlined">storefront</span>
                            <a href="{{route('dash.pdv')}}">PDV</a>
                        </li>
                        <li class="flex justify-start itens-center hover:bg-blue-500 hover:text-white p-2 ps-1 text-sm rounded-xl font-semibold text-gray-400 gap-x-2  ">
                            <span class="material-symbols-outlined">room_service</span>
                            <a href="{{route('dash.delivery')}}">DELIVERY</a>
                        </li>
                        <li class="flex justify-start itens-center hover:bg-blue-500 hover:text-white p-2 ps-1 text-sm rounded-xl font-semibold text-gray-400 gap-x-2  ">
                            <span class="material-symbols-outlined">inventory_2</span>
                            <a href="{{route('dash.estoque')}}">ESTOQUE</a>
                        </li>

                    </ul>
                </nav>
            </div>
        </div>
        <div class="used col-span-4">
            @yield('basedash')
        </div>
        <div class="rightMenu relative">
            <div class="fixed h-screen flex flex-col justify-between items-center bg-white top-0 right-0 w-[213px] p-4">
                <div class="">
                    <div class="profile w-24 h-24 rounded-full flex justify-center items-center bg-purple-400">
                        <span class="material-symbols-outlined text-8xl text-white">person</span>
                    </div>
                    <h2>yuri marcio </h2>
                    <span>administrador</span>
                </div>
                <a class="w-full p-2 rounded-2xl flex justify-center items-center text-xl bg-red-500" href="{{route('login.destroy')}}">sair</a>
            </div>
        </div>
    </section>

@endsection
