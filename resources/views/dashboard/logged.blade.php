@extends('base')

@section('title') dashboard @endsection

@section('content')
    <section class="divisories grid grid-cols-8">
        <div class="leftMenu bg-white col-span-1 h-screen px-3 py-2">
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
        <div class="used bg- col-span-3">
            @yield('basedash')
        </div>
        <div class="rightMenu "></div>
    </section>

@endsection
