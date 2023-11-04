@extends('base')
@section('title')
delivery
@endsection
@section('content')
<a href="{{ route('home') }}" class="back absolute w-10 h-10 border border-fuchsia-500 top-2 left-2 rounded-md flex justify-center items-center">
    <span class="material-symbols-outlined text-white text-4xl">keyboard_arrow_left</span>
</a>
<section class="proImg w-full h-96 bg-fuchsia-300 flex justify-start items-start">
    <img src="{{ asset('img/productImg/' . $produto->imageProd) }}" class="w-full h-4/5 object-cover">
</section>
<section class="infoEndItems absolute top-56 left-0 rounded-t-2xl p-4 w-full h-screen bg-white flex flex-col justify-start items-start gap-5 mb-36">
    <div class="flex justify-between w-full ">
        <h1 class="font-bold text-xl">{{$produto->nameProd}}</h1>
        <p class="text-xl text-fuchsia-600">R$ {{$produto->unitPriceProd}}</p>
    </div>

    <div class="infs w-full flex gap-x-4 p-1 justify-between">
        <div class="inf p-2 border flex flex-col justify-start border-fuchsia-500 rounded-xl">
            <span class="text-sm text-fuchsia-400">tamanho</span>
            <p class="text-2xl font-normal">médio</p>
        </div>
        <div class="inf p-2 border flex flex-col justify-start border-fuchsia-500 rounded-xl">
            <span class="text-sm text-fuchsia-400">Energia</span>
            <p class="text-2xl font-normal">100 cal</p>
        </div>
        <div class="inf p-2 border flex flex-col justify-start border-fuchsia-500 rounded-xl">
            <span class="text-sm text-fuchsia-400">Delivery</span>
            <p class="text-2xl font-normal">45 min</p>
        </div>
    </div>
    <section class="flex flex-col gap-7">
        <div class="itens flex flex-col gap-6">
            <h1 class="text-2xl font-bold">Creme</h1>
            <section class="itens grid grid-cols-2 sm:grid-cols-3  gap-3">
                @foreach ($creme as $prodCreme)
                <div class="item rounded-xl p-3 relative shadow-xl flex flex-col gap-2 justify-center items-start text-sm ">
                    <div class="overlayItem absolute left-0 top-0 rounded-2xl w-full h-full bg-slate-600/30 hidden" data-over-cat="{{$prodCreme->categoria->nome}}" data-pedido-id="" >
                    </div>
                    <div class="w-full h-full flex justify-center items-center max-h-[280px] ">
                        <img src="{{ asset('img/productImg/' . $prodCreme->imageProd) }}" class="border-2 border-fuchsia-700 rounded-lg object-cover object-center w-full h-full "  alt="localização">
                    </div>
                    <div class="w-full h-32 grid">
                        <h2 class="text-xl font-bold" >{{$prodCreme->nameProd}}</h2>
                        <p class="text-slate-500/75 h-14 line-clamp-2  ">{{$prodCreme->descriProd}}</p>
                        <div class="add w-full flex justify-between items-center text-fuchsia-700">
                            <p class="text-lg">R$ {{$prodCreme->unitPriceProd}}</p>
                            <button class="buttonProd w-5 h-5 bg-fuchsia-700 flex justify-center items-center rounded-full text-white"
                            data-product-id="{{$prodCreme->id}}" data-product-name="{{$prodCreme->nameProd}}"
                            data-product-price="{{$prodCreme->unitPriceProd}}" data-product-categoria="{{$prodCreme->categoria->nome}}" data-pedido-id="" >
                                <span class="material-symbols-outlined">add</span>
                            </button>
                        </div>
                    </div>
                </div>
            @endforeach
             </section>
        </div>
        <div class="itens flex flex-col gap-6">
            <h1 class="text-2xl font-bold">Acompanhamento</h1>
            <section class="itens grid grid-cols-2 sm:grid-cols-3  gap-3">
                @foreach ($acompanhamento as $prodAcomp)
                    <div class="item rounded-xl p-3 relative shadow-xl flex flex-col gap-2 justify-center items-start text-sm ">
                        <div class="overlayItem absolute left-0 top-0 rounded-2xl w-full h-full bg-slate-600/30 hidden" data-over-cat="{{$prodAcomp->categoria->nome}}" data-pedido-id="" >
                        </div>
                        <div class="w-full h-full flex justify-center items-center max-h-[280px] ">
                            <img src="{{ asset('img/productImg/' . $prodAcomp->imageProd) }}" class="border-2 border-fuchsia-700 rounded-lg object-cover object-center w-full h-full "  alt="localização">
                        </div>
                        <div class="w-full h-32 grid">
                            <h2 class="text-xl font-bold" >{{$prodAcomp->nameProd}}</h2>
                            <p class="text-slate-500/75 h-14 line-clamp-2  ">{{$prodAcomp->descriProd}}</p>
                            <div class="add w-full flex justify-between items-center text-fuchsia-700">
                                <p class="text-lg">R$ {{$prodAcomp->unitPriceProd}}</p>
                                <button class="buttonProd w-5 h-5 bg-fuchsia-700 flex justify-center items-center rounded-full text-white"
                                data-product-id="{{$prodAcomp->id}}" data-product-name="{{$prodAcomp->nameProd}}"
                                data-product-price="{{$prodAcomp->unitPriceProd}}" data-product-categoria="{{$prodAcomp->categoria->nome}}" data-pedido-id="" >
                                    <span class="material-symbols-outlined">add</span>
                                </button>
                            </div>
                        </div>
                    </div>
            @endforeach
             </section>
        </div>
    </section>

</section>
@endsection
