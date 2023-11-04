@extends('base')
@section('title')
delivery
@endsection
@section('content')
<section class="delivery p-4 ">
    <section class="mobile lg:hidden flex flex-col gap-6">
        <header class="w-full flex justify-between itens-center ">
            <div class="flex justify-center items-center gap-x-3 ">
                <img src="{{ asset('img/icon/location.svg') }}" alt="localização">
                <select id="underline_select" class="block w-11/12 py-2.5 px-0 text-lg text-gray-500 bg-transparent border-0  appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
                    <option selected>Selecione</option>
                    <option value="Rosario">Rosario</option>
                    <option value="bacabeira">Bacabeira</option>
                </select>
            </div>
            <button type="button" class="text-white bg-fuchsia-700 hover:bg-fuchsia-600 focus:outline-none focus:ring-4 focus:ring-purple-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mb-2 ">Entrar/Registrar</button>
        </header>

        <section class="banner w-full px-1 flex justify-center iten-center">
            <img src="{{ asset('img/banner/banner.png') }}" class="w-full" alt="">
        </section>

        <form id="search">
            <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
            <div class="relative">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                    </svg>
                </div>
                <input type="search" id="default-search" class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search Mockups, Logos..." required>
                <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-fuchsia-700 focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-4 py-2 ">Search</button>
            </div>
        </form>

        <section id="itens" class="flex flex-col gap-4 mb-28">
             <h3 class="text-2xl font-bold">Copos</h3>
             <div class="categories w-full relative overflow-x-auto flex gap-x-5 justify-start items-center scrollbar-hide mb-5 ">
                <button class="border-2 min-w-[95px] w-full selection:bg-fuchsia-700 selection:text-white border-fuchsia-700 flex justify-center gap-2 p-2 rounded-xl">
                    <img src="{{ asset('img/icon/acai.svg') }}" class  alt="localização">
                    <span>açai</span>
                </button>

                <button class="border-2 min-w-[95px] w-full selection:bg-fuchsia-700 selection:text-white border-fuchsia-700 flex justify-center gap-2 p-2 rounded-xl">
                    <img src="{{ asset('img/icon/calda.svg') }}" class  alt="localização">
                    <span>calda</span>
                </button>

                <button class="border-2 min-w-[95px] w-full selection:bg-fuchsia-700 selection:text-white border-fuchsia-700 flex justify-center gap-2 p-2 rounded-xl">
                    <img src="{{ asset('img/icon/morango.svg') }}" class  alt="localização">
                    <span>fruta</span>
                </button>

                <button class="border-2 min-w-[95px] w-full selection:bg-fuchsia-700 selection:text-white border-fuchsia-700 flex justify-center gap-2 p-2 rounded-xl">
                    <img src="{{ asset('img/icon/icecream.svg') }}" class  alt="localização">
                    <span>sorvete</span>
                </button>
                <button class="border-2 min-w-[95px] w-full selection:bg-fuchsia-700 selection:text-white border-fuchsia-700 flex justify-center gap-2 p-2 rounded-xl">
                    <img src="{{ asset('img/icon/candy.svg') }}" class  alt="localização">
                    <span>doces</span>
                </button>
             </div>
             <section class="itens grid grid-cols-2 sm:grid-cols-3  gap-3">
                <div class="item rounded-xl p-3 shadow-xl flex flex-col gap-2 justify-center items-start text-lg ">
                    @foreach ($copo as $prodCopo)
                    <img src="{{ asset('img/productImg/' . $prodCopo->imageProd) }}" class="w-full max-w-xs border-2 border-fuchsia-700 rounded-lg object-cover object-center h-full "  alt="localização">
                    <h2 class="text-xl font-bold" >{{$prodCopo->nameProd}}</h2>
                    <p class="text-slate-500/75">{{$prodCopo->descriProd}}</p>
                    <div class="add w-full flex justify-between items-center text-fuchsia-700">
                        <p class="text-xl">R$ {{$prodCopo->unitPriceProd}}</p>
                        <a href="{{ route('delivery.prod', ['id' => $prodCopo->id]) }}" class="buttonProd w-11 h-11  bg-fuchsia-700 flex justify-center items-center rounded-full text-white">
                            <span class="material-symbols-outlined">add</span>
                        </a>
                    </div>
                    @endforeach
                </div>
             </section>
        </section>

        <footer class="w-full bg-white fixed top-[89%] left-0 p-6 px-11 text-fuchsia-700 flex justify-between items-center rounded-t-3xl shadow-2xl">
            <button class="hover:bg-fuchsia-400 rounded-3xl" ><span class="material-symbols-outlined text-5xl">home</span></button>
            <button class="hover:bg-fuchsia-400 rounded-3xl" ><span class="material-symbols-outlined text-5xl">local_mall</span></button>
            <button class="hover:bg-fuchsia-400 rounded-3xl" ><span class="material-symbols-outlined text-5xl">account_circle</span></button>
        </footer>
    </section>

    <section class="desktop hidden lg:grid grid-cols-10 lazy">
        <section class="body col-span-7 flex flex-col gap-5 relative ">
            <header class="flex shadow-2xl relative -ml-1 px-4 w-full rounded-2xl left-0 ">
            <button id="menu"><span class="material-symbols-outlined text-4xl">menu</span></button>
                <form id="search" class="w-full p-2">
                    <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                            </svg>
                        </div>
                        <input type="search" id="default-search" class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search Mockups, Logos..." required>
                        <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-fuchsia-700 focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-4 py-2 ">Search</button>
                    </div>
                </form>
            </header>
            <div id="banner w-full flex justify-center items-center">
                <div class="rounded-2xl w-full flex justify-center items-center ">
                    <img  src="{{ asset('img/tijela.jpg') }}" class="object-cover rounded-3xl h-64 w-11/12 border-2 border-fuchsia-700" alt="">
                </div>
            </div>
            <div class="categories w-full relative overflow-x-auto flex gap-x-5 justify-start items-center scrollbar-hide px-8">
                <button class="border-2 min-w-[95px] w-full selection:bg-fuchsia-700 selection:text-white border-fuchsia-700 flex justify-center gap-2 p-2 rounded-xl">
                    <img src="{{ asset('img/icon/acai.svg') }}" class  alt="localização">
                    <span>açai</span>
                </button>

                <button class="border-2 min-w-[95px] w-full selection:bg-fuchsia-700 selection:text-white border-fuchsia-700 flex justify-center gap-2 p-2 rounded-xl">
                    <img src="{{ asset('img/icon/calda.svg') }}" class  alt="localização">
                    <span>calda</span>
                </button>

                <button class="border-2 min-w-[95px] w-full selection:bg-fuchsia-700 selection:text-white border-fuchsia-700 flex justify-center gap-2 p-2 rounded-xl">
                    <img src="{{ asset('img/icon/morango.svg') }}" class  alt="localização">
                    <span>fruta</span>
                </button>

                <button class="border-2 min-w-[95px] w-full selection:bg-fuchsia-700 selection:text-white border-fuchsia-700 flex justify-center gap-2 p-2 rounded-xl">
                    <img src="{{ asset('img/icon/icecream.svg') }}" class  alt="localização">
                    <span>sorvete</span>
                </button>
                <button class="border-2 min-w-[95px] w-full selection:bg-fuchsia-700 selection:text-white border-fuchsia-700 flex justify-center gap-2 p-2 rounded-xl">
                    <img src="{{ asset('img/icon/candy.svg') }}" class  alt="localização">
                    <span>doces</span>
                </button>
             </div>
            </div>
             <div class="options flex flex-col gap-y-10 p-6">
                <div class="flex flex-col gap-6">
                    <h1 class="text-xl font-bold">Copos</h1>
                    <section class="itens grid grid-cols-2 sm:grid-cols-3  gap-3">
                        @foreach ($copo as $prodCopo)
                            <div class="item rounded-xl p-3 shadow-xl flex flex-col gap-2 justify-center items-start text-lg relative">
                                <div class="overlayItem absolute left-0 top-0 rounded-2xl w-full h-full bg-slate-600/30 hidden"  data-over-cat="{{$prodCopo->categoria->nome}}" data-pedido-id="" >
                                </div>
                                <div class="w-full h-full flex justify-center items-center max-h-[280px] ">
                                    <img src="{{ asset('img/productImg/' . $prodCopo->imageProd) }}" class="border-2 border-fuchsia-700 rounded-lg object-cover object-center w-full h-full "  alt="localização">
                                </div>
                                <div class="w-full h-32 grid">
                                    <h2 class="text-xl font-bold" >{{$prodCopo->nameProd}}</h2>
                                    <p class="text-slate-500/75 h-14 line-clamp-2  ">{{$prodCopo->descriProd}}</p>
                                    <div class="add w-full flex justify-between items-center text-fuchsia-700">
                                        <p class="text-xl">R$ {{$prodCopo->unitPriceProd}}</p>
                                        <button class="buttonProd w-11 h-11 bg-fuchsia-700 flex justify-center items-center rounded-full text-white"
                                        data-product-id="{{$prodCopo->id}}" data-product-name="{{$prodCopo->nameProd}}"
                                        data-product-price="{{$prodCopo->unitPriceProd}}" data-product-categoria="{{$prodCopo->categoria->nome}}" data-pedido-id="" >
                                            <span class="material-symbols-outlined">add</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </section>
                </div>
                <div class="itens flex flex-col gap-6">
                    <h1 class="text-xl font-bold">Creme</h1>
                    <section class="itens grid grid-cols-2 sm:grid-cols-3  gap-3">
                        @foreach ($creme as $prodCreme)
                        <div class="item rounded-xl p-3 relative shadow-xl flex flex-col gap-2 justify-center items-start text-lg ">
                            <div class="overlayItem absolute left-0 top-0 rounded-2xl w-full h-full bg-slate-600/30 hidden" data-over-cat="{{$prodCreme->categoria->nome}}" data-pedido-id="" >
                            </div>
                            <div class="w-full h-full flex justify-center items-center max-h-[280px] ">
                                <img src="{{ asset('img/productImg/' . $prodCreme->imageProd) }}" class="border-2 border-fuchsia-700 rounded-lg object-cover object-center w-full h-full "  alt="localização">
                            </div>
                            <div class="w-full h-32 grid">
                                <h2 class="text-xl font-bold" >{{$prodCreme->nameProd}}</h2>
                                <p class="text-slate-500/75 h-14 line-clamp-2  ">{{$prodCreme->descriProd}}</p>
                                <div class="add w-full flex justify-between items-center text-fuchsia-700">
                                    <p class="text-xl">R$ {{$prodCreme->unitPriceProd}}</p>
                                    <button class="buttonProd w-11 h-11 bg-fuchsia-700 flex justify-center items-center rounded-full text-white"
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
                    <h1 class="text-xl font-bold">Acompanhamento</h1>
                    <section class="itens grid grid-cols-2 sm:grid-cols-3  gap-3">
                        @foreach ($acompanhamento as $prodAcomp)
                        <div class="item rounded-xl relative p-3 shadow-xl flex flex-col gap-2 justify-center items-start text-lg ">
                            <div  class="overlayItem absolute left-0 top-0 rounded-2xl w-full h-full bg-slate-600/30 hidden" data-over-cat="{{$prodAcomp->categoria->nome}}" data-pedido-id="">
                            </div>
                            <div class="w-full h-full flex justify-center items-center max-h-[280px] ">
                                <img src="{{ asset('img/productImg/' . $prodAcomp->imageProd) }}" class="border-2 border-fuchsia-700 rounded-lg object-cover object-center w-full h-full "  alt="localização">
                            </div>
                            <div class="w-full h-32 grid">
                                <h2 class="text-xl font-bold" >{{$prodAcomp->nameProd}}</h2>
                                <p class="text-slate-500/75 h-14 line-clamp-2  ">{{$prodAcomp->descriProd}}</p>
                                <div class="add w-full flex justify-between items-center text-fuchsia-700">
                                    <p class="text-xl">R$ {{$prodAcomp->unitPriceProd}}</p>
                                    <button class="buttonProd w-11 h-11 bg-fuchsia-700 flex justify-center items-center rounded-full text-white"
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
             </div>
        </section>
        <section class="menulateralRight fixed right-0 top-0 w-[30.4%] h-full flex flex-col rounded-2xl bg-white col-span-3">
            @auth
                <div class="profile flex justify-between p-4 items-center shadowRounded">
                    <div class="flex items-center space-x-4">
                        @if (null !== session("imageProfile"))
                            <img class="w-14 h-14 rounded-full" src="{{ asset("img/productImg/". session("imageProfile")) }}" alt="">
                        @else
                            <img class="w-14 h-14 rounded-full" src="{{ asset("img/icon/profile.svg") }}" alt="">
                        @endif

                        <div class="font-medium dark:text-white">
                            <div>{{session("nome")}}</div>
                            <div class="text-sm text-gray-500 dark:text-gray-400">{{session("email")}}</div>
                        </div>
                    </div>
                    <a href="{{ route('logout') }}" class="rounded-full bg-red-500 flex justify-center p-2 items-center">
                        <img src="{{ asset('img/icon/logout.svg') }}" class="w-10/12"  alt="">
                    </a>
                </div>
                <div class="card flex flex-col  items-start shadowRounded  p-1 px-3 ">
                    <span class="text-slate-400">Forma de pagamento</span>
                    <div class="format w-full">
                        <select id="payments" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-fuchsia-400 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400">
                        <option selected>Forma de pagamento</option>
                        <option value="pix">Pix</option>
                        <option value="debito">Debito</option>
                        <option value="credito">Credito</option>
                        <option value="dinheiro">Dinheiro</option>
                        </select>

                    </div>
                </div>
                <div class="location flex justify-between items-center shadowRounded  p-1 px-3 ">
                    <div class="format">
                        <span class="text-slate-400">Endereço</span>
                        <input type="text" id="endereco" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-fuchsia-500 w-full p-2.5 hidden ">
                        <p class="nullEndereco">{{session("endereco")}}</p>
                    </div>
                    <button class="confirm border border-lime-500 rounded-lg hidden ">
                        <span class="material-symbols-outlined text-lime-500 text-3xl">done</span>
                    </button>
                   <button class="EditeEndereco border border-fuchsia-600 rounded-lg ">
                    <span class="material-symbols-outlined text-fuchsia-600 text-3xl">edit</span>
                   </button>
                </div>
                <div class="shadowRounded h-full max-h-full flex flex-col gap-2 p-4 overflow-y-auto ">
                    <span class="text-slate-400 ">Meu pedido</span>
                    <div class="orders p-4 flex flex-col justify-between gap-3 overflow-y-auto">
                        {{-- <div class="order p-2 grid grid-col-3 grid-rows-1 gap-2 border-b-2 rounded-xl bg-red-200">
                            <div class="flex items-center gap-3">
                                <img src="{{ asset('img/acaimorango.png') }}" class="w-2/12" alt="">
                                <div class="description h-full flex flex-col justify-center break-all">
                                    <span>Açai 550ml</span>
                                    <p>creme : Leite ninho</p>
                                    <p class="">acom : confete, chocolate, morango,morango,morango,morango,morango,morango,morango, <b class="text-fuchsia-700">nozes</b></p>
                                </div>
                            </div>
                            <button class="remove Button p-3">
                            <img src="{{ asset('img/icon/remove.svg') }}" class="" alt="">
                            </button>
                        </div> --}}
                        {{-- <div class="order p-2 flex justify-center items-center gap-2 border-b-2 rounded-xl text-xl">
                            <span class="material-symbols-outlined text-fuchsia-700">specific_gravity</span> adicione um copo
                        </div> --}}

                    </div>
                    <button class="addProd">
                        <img src="{{ asset('img/icon/plus.svg') }}" class="w-10 h-10" alt="">
                    </button>
                </div>
                <div class="total flex flex-col justify-center items-center p-4 gap-5">
                    <div class=" flex justify-between items-center w-full text-xl">
                        <p>total : </p>
                        <p class="innerTotal text-fuchsia-700">

                        </p>
                    </div>
                    <button id="finishOrder" class="p-4 w-3/5 flex justify-center items-center bg-green-500 rounded-2xl">
                        Finalizar compra
                    </button>
                </div>
            @else
                <div class="profile flex justify-between p-3 items-center shadowRounded">
                    <div class="w-full flex items-center space-x-4 justify-between">
                        <img class="w-14 h-14 rounded-full" src="{{ asset('img/icon/naoLogado.gif') }}" alt="">
                        <div class="font-medium dark:text-white">
                           <a href="{{ route('login') }}"  class="text-lg cursor-pointer hover:text-xl transition-all border-2 hover:bg-fuchsia-100 hover:shadowRounded p-1 rounded-xl">
                                entrar | cadastrar
                           </a>
                        </div>
                    </div>
                </div>
                <div class="card flex flex-col  items-start shadowRounded  p-1 px-3 ">
                    <span class="text-slate-400">Forma de pagamento</span>
                    <div class="format w-full">
                        <select id="payments" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-fuchsia-400 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400">
                        <option selected>Forma de pagamento</option>
                        <option value="pix">Pix</option>
                        <option value="debito">Debito</option>
                        <option value="credito">Credito</option>
                        <option value="dinheiro">Dinheiro</option>
                        </select>

                    </div>
                </div>
                <div class="location flex justify-between items-center shadowRounded  p-1 px-3 ">
                    <div class="format">
                        <span class="text-slate-400">Endereço</span>
                        <input type="text" id="endereco" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-fuchsia-500 w-full p-2.5 hidden ">
                        <p class="nullEndereco">Nenhum Endereço cadastrado</p>
                    </div>
                    <button class="confirm border border-lime-500 rounded-lg hidden ">
                        <span class="material-symbols-outlined text-lime-500 text-3xl">done</span>
                    </button>
                   <button class="EditeEndereco border border-fuchsia-600 rounded-lg ">
                    <span class="material-symbols-outlined text-fuchsia-600 text-3xl">edit</span>
                   </button>
                </div>
                <div class="shadowRounded h-full max-h-full flex flex-col gap-2 p-4 overflow-y-auto ">
                    <span class="text-slate-400 ">Meu pedido</span>
                    <div class="orders p-4 flex flex-col justify-between gap-3 overflow-y-auto">
                        {{-- <div class="order p-2 grid grid-col-3 grid-rows-1 gap-2 border-b-2 rounded-xl bg-red-200">
                            <div class="flex items-center gap-3">
                                <img src="{{ asset('img/acaimorango.png') }}" class="w-2/12" alt="">
                                <div class="description h-full flex flex-col justify-center break-all">
                                    <span>Açai 550ml</span>
                                    <p>creme : Leite ninho</p>
                                    <p class="">acom : confete, chocolate, morango,morango,morango,morango,morango,morango,morango, <b class="text-fuchsia-700">nozes</b></p>
                                </div>
                            </div>
                            <button class="remove Button p-3">
                            <img src="{{ asset('img/icon/remove.svg') }}" class="" alt="">
                            </button>
                        </div> --}}
                        {{-- <div class="order p-2 flex justify-center items-center gap-2 border-b-2 rounded-xl text-xl">
                            <span class="material-symbols-outlined text-fuchsia-700">specific_gravity</span> adicione um copo
                        </div> --}}

                    </div>
                    <button class="addProd">
                        <img src="{{ asset('img/icon/plus.svg') }}" class="w-10 h-10" alt="">
                    </button>
                </div>
                <div class="total flex flex-col justify-center items-center p-4 gap-5">
                    <div class=" flex justify-between items-center w-full text-xl">
                        <p>total : </p>
                        <p class="innerTotal text-fuchsia-700">

                        </p>
                    </div>
                    <button id="finishOrder" class="p-4 w-3/5 flex justify-center items-center bg-green-500 rounded-2xl">
                        Finalizar compra
                    </button>
                </div>
            @endauth
        </section>
        <div id="infoleft" class="overlay hidden fixed left-0 top-0  bg-slate-500/80 w-screen h-full ">
            <button id="closeinfoleft" class=" absolute felx justify-center items-center right-10 top-4 bg-fuchsia-500 rounded-xl w-14 h-14">
                <span class="material-symbols-outlined text-4xl">close</span>
            </button>
            @auth
                <section class="menuLateralLeft fixed left-0 top-0 w-[30.4%] h-full flex flex-col rounded-2xl bg-white col-span-3 gap-2">
                    <div class="profile flex justify-between p-4 items-center shadowRounded mb-5">
                        <div class="flex items-center space-x-4">
                            @if (null !== session("imageProfile"))
                                <img class="w-14 h-14 rounded-full" src="{{ asset("img/productImg/". session("imageProfile")) }}" alt="">
                            @else
                                <img class="w-14 h-14 rounded-full" src="{{ asset("img/icon/profile.svg") }}" alt="">
                            @endif

                            <div class="font-medium dark:text-white">
                                <div>{{session("nome")}}</div>
                                <div class="text-sm text-gray-500 dark:text-gray-400">{{session("email")}}</div>
                            </div>
                        </div>
                        <a href="{{ route('logout') }}" class="rounded-full bg-red-500 flex justify-center p-2 items-center">
                            <img src="{{ asset('img/icon/logout.svg') }}" class="w-10/12"  alt="">
                        </a>
                    </div>
                    <div class="editeprofile px-4 flex flex-col gap-2">
                        <h1 class="text-xl">Seus dados</h1>
                        <div class=" flex flex-col gap-2 justify-center items-center">
                            <div class="inputName flex justify-between items-center w-full shadowRounded p-2 ">
                                <div class="title">
                                    <h3 class="text-fuchsia-700">Nome</h3>
                                    <span>{{session("nome")}}</span>
                                </div>
                                <button class="Button">
                                    <img class=" rounded-full" src="{{ asset('img/icon/pencil.svg') }}" alt="">
                                </button>
                            </div>
                            <div class="inputEmail flex justify-between items-center w-full shadowRounded p-2 ">
                                <div class="title">
                                    <h3 class="text-fuchsia-700">Email</h3>
                                    <span>{{session("email")}}</span>
                                </div>
                                <button class="Button">
                                    <img class=" rounded-full" src="{{ asset('img/icon/pencil.svg') }}" alt="">
                                </button>
                            </div>
                            <div class="inputTelefone flex justify-between items-center w-full shadowRounded p-2 ">
                                <div class="title">
                                    <h3 class="text-fuchsia-700">Telefone</h3>
                                    <span>{{session("phone")}}</span>
                                </div>
                                <button class="Button">
                                    <img class=" rounded-full" src="{{ asset('img/icon/pencil.svg') }}" alt="">
                                </button>
                            </div>
                            <div class="inputEndereço flex justify-between items-center w-full shadowRounded p-2 ">
                                <div class="title">
                                    <h3 class="text-fuchsia-700">Endereço</h3>
                                    <span>{{session("endereco")}}</span>
                                </div>
                                <button class="Button">
                                    <img class=" rounded-full" src="{{ asset('img/icon/pencil.svg') }}" alt="">
                                </button>
                            </div>
                            <div class="inputCpf flex justify-between items-center w-full shadowRounded p-2 ">
                                <div class="title">
                                    <h3 class="text-fuchsia-700">Cpf</h3>
                                    <span>{{session("cpf")}}</span>
                                </div>
                                <button class="Button">
                                    <img class=" rounded-full" src="{{ asset('img/icon/pencil.svg') }}" alt="">
                                </button>
                            </div>
                            <div class="w-full flex items-center gap-2">
                                <button class="ultimosPedidos text-fuchsia-700 flex justify-between items-center w-full shadowRounded p-4 ">
                                    <p>Ultimos pedidos</p>
                                </button>
                                <button class="faleConosco text-fuchsia-700 flex justify-between items-center w-full shadowRounded p-4 ">
                                    <p>Fale Conosco</p>
                                </button>
                            </div>
                        </div>
                    </div>
                </section>
            @else
            <section class="menuLateralLeft relative  left-0 top-0 w-[30.4%] h-full flex flex-col rounded-2xl bg-white col-span-3">
                <div class="layer absolute w-full h-full bg-slate-500/40 backdrop-blur-sm flex justify-center items-center">
                    <button class="p-4 w-3/5 flex justify-center items-center bg-green-400 rounded-2xl">
                        Entrar | Registrar
                    </button>
                </div>
                <div class="profile flex justify-between p-4 items-center shadowRounded">
                    <div class="flex items-center space-x-4">
                        <img class="w-14 h-14 rounded-full" src="{{ asset('img/icon/profile.svg') }}" alt="">
                        <div class="font-medium dark:text-white">
                            <div>Yuri Gomes</div>
                            <div class="text-sm text-gray-500 dark:text-gray-400">Email aqui</div>
                        </div>
                    </div>
                    <button class="rounded-full bg-red-500 flex justify-center p-2 items-center">
                        <img src="{{ asset('img/icon/logout.svg') }}" class="w-10/12"  alt="">
                    </button>
                </div>
                <div class="editeprofile px-4">
                    <h1 class="text-xl">Seus dados</h1>
                    <div class=" flex flex-col gap-2 justify-center items-center">
                        <div class="inputName flex justify-between items-center w-4/5 shadowRounded p-4 ">
                            <div class="title">
                                <h3 class="text-fuchsia-700">Nome</h3>
                                <span>Yuri marcio gomes rocha</span>
                            </div>
                            <button class="Button">
                                <img class=" rounded-full" src="{{ asset('img/icon/pencil.svg') }}" alt="">
                            </button>
                        </div>
                        <div class="inputEmail flex justify-between items-center w-4/5 shadowRounded p-4 ">
                            <div class="title">
                                <h3 class="text-fuchsia-700">Email</h3>
                                <span>Yuri marcio gomes rocha</span>
                            </div>
                            <button class="Button">
                                <img class=" rounded-full" src="{{ asset('img/icon/pencil.svg') }}" alt="">
                            </button>
                        </div>
                        <div class="inputTelefone flex justify-between items-center w-4/5 shadowRounded p-4 ">
                            <div class="title">
                                <h3 class="text-fuchsia-700">Telefone</h3>
                                <span>Yuri marcio gomes rocha</span>
                            </div>
                            <button class="Button">
                                <img class=" rounded-full" src="{{ asset('img/icon/pencil.svg') }}" alt="">
                            </button>
                        </div>
                        <div class="inputEndereço flex justify-between items-center w-4/5 shadowRounded p-4 ">
                            <div class="title">
                                <h3 class="text-fuchsia-700">Endereço</h3>
                                <span>Yuri marcio gomes rocha</span>
                            </div>
                            <button class="Button">
                                <img class=" rounded-full" src="{{ asset('img/icon/pencil.svg') }}" alt="">
                            </button>
                        </div>
                        <div class="inputCpf flex justify-between items-center w-4/5 shadowRounded p-4 ">
                            <div class="title">
                                <h3 class="text-fuchsia-700">Cpf</h3>
                                <span>Yuri marcio gomes rocha</span>
                            </div>
                            <button class="Button">
                                <img class=" rounded-full" src="{{ asset('img/icon/pencil.svg') }}" alt="">
                            </button>
                        </div>
                        <button class="ultimosPedidos text-fuchsia-700 flex justify-between items-center w-4/5 shadowRounded p-4 ">
                            <p>Ultimos pedidos</p>
                        </button>
                        <button class="faleConosco text-fuchsia-700 flex justify-between items-center w-4/5 shadowRounded p-4 ">
                            <p>Fale Conosco</p>
                        </button>
                    </div>

                </div>
            </section>
            @endauth

        </div>
</section>
@endsection
