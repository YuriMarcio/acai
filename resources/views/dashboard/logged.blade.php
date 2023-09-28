@extends('base')

@section('title') dashboard @endsection

@section('content')
    <section class="divisories h-full grid grid-cols-6 relative">
        <div class="leftMenu fixed w-[265px] h-full">
            <div class=" bg-white top-0 left-0 h-full  p-4 grid grid-col-1 grid-rows-10 gap-5">
                <div class="logo flex justify-center items-center">
                    <img src="{{ asset('img/logo/logo.jpg') }}" class="rounded-full max-h-16" alt="Imagem">
                </div>
                <a class="flex justify-start  gap-2 items-center shadowRounded p-2 font-semibold text-lg">
                    <span class="material-symbols-outlined text-fuchsia-600 text-3xl ">query_stats</span>
                    <span>Estatísticas</span>
                </a>
                <a  href="{{route('dash.pdv')}}" class="flex justify-start  gap-2 items-center shadowRounded p-2 font-semibold text-lg">
                    <span class="material-symbols-outlined text-fuchsia-600 text-3xl ">point_of_sale</span>
                    <span>Frente de caixa</span>
                </a>
                <a href="{{route('dash.delivery')}}" class="flex justify-start  gap-2 items-center shadowRounded p-2 font-semibold text-lg">
                    <span class="material-symbols-outlined text-fuchsia-600 text-3xl ">shopping_bag</span>
                    <span>Delivery</span>
                </a>
                <a href="{{route('dash.estoque')}}" class="flex justify-start  gap-2 items-center shadowRounded p-2 font-semibold text-lg">
                    <span class="material-symbols-outlined text-fuchsia-600 text-3xl ">shelves</span>
                    <span>Estoque</span>
                </a>
                <div class="notification h-[258px] row-span-4 shadowRounded p-4 ">
                    <div  class="flex justify-start gap-2 items-center  font-semibold text-lg">
                        <span class="material-symbols-outlined text-fuchsia-600 text-3xl ">notifications</span>
                        <span>Noticações</span>
                    </div>
                    <div class="overflow-y-auto h-[191px] mb-36 scrollbar scrollbar-hidden">
                        <div class="notificacoes p-4 shadowRounded ">
                            <div class="">
                                <head class="text-slate-400">Estoque :</head>
                                <p>calda de morango em alerta de estoque</p>
                            </div>
                        </div>
                        <div class="notificacoes p-4 shadowRounded ">
                            <div class="">
                                <head class="text-slate-400">Estoque :</head>
                                <p>calda de morango em alerta de estoque</p>
                            </div>
                        </div>
                        <div class="notificacoes p-4 shadowRounded ">
                            <div class="">
                                <head class="text-slate-400">Estoque :</head>
                                <p>calda de morango em alerta de estoque</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="profile flex items-center justify-between">
                    <div class="flex items-center gap-2">
                        <img class="w-20 rounded-full" src="{{ asset('img/icon/profile.svg') }}" alt="">
                        <div class="flex flex-col">
                            <h1>yuri</h1>
                            <span>função</span>
                        </div>
                    </div>
                    <a href="{{route('login.destroy')}}" class="cursor-pointer">
                        <span class="material-symbols-outlined text-fuchsia-600 text-3xl ">logout</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="used col-span-6 ml-64">
            @yield('basedash')
        </div>
        {{-- <div class="rightMenu relative">
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
        </div> --}}
    </section>

@endsection
