@extends('base')

@section('title')
delivery
@endsection

@section('content')
    <div class="banner w-100 relative">
        <div class="bannerImg w-100  w-full h-100 max-h-96 absolute z-0">
            <img src="{{ asset('img/backacai.jpg') }}" class="w-full h-full max-h-80 object-cover object-center z-0" alt="Imagem">
        </div>
        <section id="header" class="hidden text-sm w-full z-50 px-16 fixed bg-white h-16 md:flex items-center">
            <nav class="w-full flex justify-between items-center">
                <div class="location flex justify-center items-center font-semibold gap-2">
                    <span class="material-symbols-outlined text-purple-400">where_to_vote</span>
                    <div class="locationName">
                        <h1 class="font-medium text-xl text-zinc-700">Rosário</h1>
                    </div>
                </div>
                <ul class="w-full max-w-2xl md:flex justify-between items-center">
                    <li class="flex justify-center items-center gap-2 cursor-pointer">
                        <span class="material-symbols-outlined text-2xl">import_contacts</span>Cardapio
                    </li>
                    <li class="flex justify-center items-center gap-2 cursor-pointer">
                        <span class="material-symbols-outlined text-2xl">edit_note</span> Meus pedidos
                    </li>
                    {{-- <li class="flex justify-center items-center gap-2 cursor-pointer">
                        <span class="material-symbols-outlined text-2xl">military_tech</span>Promoções e premios
                    </li> --}}
                    <li class="flex justify-center items-center gap-2 cursor-pointer">
                        <input type="button" class="bg-white hover:bg-purple-400 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow cursor-pointer" value="Acessar/Cadastrar">
                    </li>
                </ul>
            </nav>
        </section>
        <section id="headermobile" class="text-sm w-full z-50 px-7 fixed bg-white h-16 flex items-center justify-between">
            <div class="location flex justify-center items-center font-semibold gap-2">
                <span class="material-symbols-outlined text-purple-400">where_to_vote</span>
                <div class="locationName">
                    <h1 class="font-medium text-xl text-zinc-700">Rosário</h1>
                </div>
            </div>
            <nav class="flex justify-between items-center relative">
                <span class="material-symbols-outlined">
                    menu
                </span>
                <ul class=" p-10 max-w-2xl absolute bg-white flex-col gap-y-2 -right-6 top-0 -mr-1 ">
                    <li class="flex justify-center items-left gap-2 cursor-pointer">
                        <span class="material-symbols-outlined text-2xl">import_contacts</span>Cardapio
                    </li>
                    <li class="flex justify-center items-center gap-2 cursor-pointer">
                        <span class="material-symbols-outlined text-2xl">edit_note</span> Meus pedidos
                    </li>
                    {{-- <li class="flex justify-center items-center gap-2 cursor-pointer">
                        <span class="material-symbols-outlined text-2xl">military_tech</span>Promoções e premios
                    </li> --}}
                    <li class="flex justify-center items-center gap-2 cursor-pointer">
                        <input type="button" class="bg-white hover:bg-purple-400 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow cursor-pointer" value="Acessar/Cadastrar">
                    </li>
                </ul>
            </nav>
        </section>
        <nav class="using px-7 md:px-16 grid grid-cols-4 gap-2 relative z-10 top-44">
            <section class="status col-span-4 md:col-span-3">
                <div class="profile bg-red-400  rounded-xl max-h-56  flex gap-4 p-6  w-full bg-white mb-10">
                    <img src="img/logo/logo.jpg" class="max-h-40 w-5/12 h-5/12 rounded-full" alt="">
                    <span class="status absolute top-10 left-52">
                        <div class="shoreName text-xl font-semibold">Açai Clube</div>
                        <div class="flex items-center gap-2 mt-2">
                            <div class="bol w-3.5 h-3.5 rounded-2xl bg-purple-400"></div>
                            <h2 class="text-purple-400 text-base">Funcionando -</h2>
                            <div class="openHours">Fecha às 23h45</div>
                        </div>
                    </span>
                </div>
                <section class="bodyDelivery">
                    <div class="search w-full h-12 bg-white rounded flex items-center py-7 px-2 gap-5 ">
                        <button class="w-11 h-11 rounded-md bg-gray-100 flex justify-center items-center p-2">
                            <span class="material-symbols-outlined">search</span>
                        </button>
                        <input type="search" class=" w-full p-3 outline-none border-none" name="busca" placeholder="Buscar produtos ..." id="busca">
                    </div>
                    <div class="Ingredients">
                        <div class="emphasis flex flex-col gap-y-5 mb-10 mt-10">
                            <h1 class="font-medium text-xl text-zinc-700">Destaques </h1>
                            <div class="itens ">
                                    <div class="swiper w-full   destaqueDelivery">
                                        <div class="swiper-wrapper relative right-80 w-full">
                                          <div class="swiper-slide w-80 ">
                                            <div class="item w-full rounded bg-white p-3 flex flex-col flex-wrap-reverse">
                                                <div class="text col-span-2">
                                                    <div class="prodImg col-span-2 mb-4 ">
                                                        <img src="{{ asset('img/ingredientes/castanha.jpg') }}" class="w-full h-full rounded-lg" alt="" srcset="">
                                                    </div>
                                                    <div class="titleProd text-base">titulo produto</div>
                                                    <div class="descProd mb-16 text-sm text-gray-400">alguma descrição do produto</div>
                                                    <div class="valueProd text-sm text-green-800 flex justify-between px-1">R$ 29,00 <input type="checkbox" class="input" name="include" id="include"></div>
                                                </div>
                                            </div>
                                          </div><div class="swiper-slide w-80 ">
                                            <div class="item w-full rounded bg-white p-3 flex flex-col flex-wrap-reverse">
                                                <div class="text col-span-2">
                                                    <div class="prodImg col-span-2 mb-4 ">
                                                        <img src="{{ asset('img/ingredientes/castanha.jpg') }}" class="w-full h-full rounded-lg" alt="" srcset="">
                                                    </div>
                                                    <div class="titleProd text-base">titulo produto</div>
                                                    <div class="descProd mb-16 text-sm text-gray-400">alguma descrição do produto</div>
                                                    <div class="valueProd text-sm text-green-800 flex justify-between px-1">R$ 29,00 <input type="checkbox" class="input" name="include" id="include"></div>
                                                </div>
                                            </div>
                                          </div>
                                        </div>
                                    </div>
                            </div>
                            {{-- carrousel de itens mais pedidos --}}
                        </div>
                        <div class="emphasis flex flex-col gap-y-5 mb-10">
                            <h1 class="font-medium text-xl text-zinc-700">Copos </h1>
                            <div class="itens grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div class="item w-full rounded bg-white p-5 grid grid-cols-4 grid-rows-1">
                                    <div class="text col-span-2">
                                        <div class="titleProd text-base">AÇAI-300ML</div>
                                        <div class="descProd mb-16 text-sm text-gray-400">AÇAI + 1 CREME + 2 ACOMPANHAMENTOS GRÁTIS</div>
                                        <div class="valueProd text-sm text-green-800 flex justify-between px-1">R$ 12,50 <input type="checkbox" class="input" name="include" id="include"></div>
                                    </div>
                                    <div class="prodImg col-span-2 ">
                                        <img src="{{ asset('img/ingredientes/castanha.jpg') }}" class="w-full h-full rounded-lg" alt="" srcset="">
                                    </div>
                                </div>
                                <div class="item w-full rounded bg-white p-5 grid grid-cols-4 grid-rows-1">
                                    <div class="text col-span-2">
                                        <div class="titleProd text-base">AÇAI-400ML</div>
                                        <div class="descProd mb-16 text-sm text-gray-400">AÇAI + 1 CREME + 3 ACOMPANHAMENTOS GRÁTIS</div>
                                        <div class="valueProd text-sm text-green-800 flex justify-between px-1">R$ 14,50 <input type="checkbox" class="input" name="include" id="include"></div>
                                    </div>
                                    <div class="prodImg col-span-2 ">
                                        <img src="{{ asset('img/ingredientes/castanha.jpg') }}" class="w-full h-full rounded-lg" alt="" srcset="">
                                    </div>
                                </div>
                                <div class="item w-full rounded bg-white p-5 grid grid-cols-4 grid-rows-1">
                                    <div class="text col-span-2">
                                        <div class="titleProd text-base">AÇAI-500ML</div>
                                        <div class="descProd mb-16 text-sm text-gray-400">AÇAI + 1 CREME + 4 ACOMPANHAMENTOS GRÁTIS</div>
                                        <div class="valueProd text-sm text-green-800 flex justify-between px-1">R$ 29,00 <input type="checkbox" class="input" name="include" id="include"></div>
                                    </div>
                                    <div class="prodImg col-span-2 ">
                                        <img src="{{ asset('img/ingredientes/castanha.jpg') }}" class="w-full h-full rounded-lg" alt="" srcset="">
                                    </div>
                                </div>

                            </div>
                            {{-- carrousel de itens mais pedidos --}}
                        </div>
                        <div class="emphasis flex flex-col gap-y-5 mb-10">
                            <h1 class="font-medium text-xl text-zinc-700">CREMES</h1>
                            <div class="itens grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div class="item w-full rounded bg-white p-5 grid grid-cols-4 grid-rows-1">
                                    <div class="text col-span-2">
                                        <div class="titleProd text-xl">CREME DE CUPUAÇU</div>
                                        <div class="descProd mb-16 text-sm text-gray-400">alguma descrição do produto</div>
                                        <div class="valueProd text-sm text-green-800 flex justify-between px-1"> <input type="checkbox" class="input" name="include" id="include"></div>
                                    </div>
                                    <div class="prodImg col-span-2 ">
                                        <img src="{{ asset('img/ingredientes/castanha.jpg') }}" class="w-full h-full rounded-lg" alt="" srcset="">
                                    </div>
                                </div>
                                <div class="item w-full rounded bg-white p-5 grid grid-cols-4 grid-rows-1">
                                    <div class="text col-span-2">
                                        <div class="titleProd text-xl">CREME DE LEITE NINHO</div>
                                        <div class="descProd mb-16 text-sm text-gray-400">alguma descrição do produto</div>
                                        <div class="valueProd text-sm text-green-800 flex justify-between px-1"> <input type="checkbox" class="input" name="include" id="include"></div>
                                    </div>
                                    <div class="prodImg col-span-2 ">
                                        <img src="{{ asset('img/ingredientes/castanha.jpg') }}" class="w-full h-full rounded-lg" alt="" srcset="">
                                    </div>
                                </div>
                                <div class="item w-full rounded bg-white p-5 grid grid-cols-4 grid-rows-1">
                                    <div class="text col-span-2">
                                        <div class="titleProd text-xl">CREME DE OREO</div>
                                        <div class="descProd mb-16 text-sm text-gray-400">alguma descrição do produto</div>
                                        <div class="valueProd text-sm text-green-800 flex justify-between px-1"> <input type="checkbox" class="input" name="include" id="include"></div>
                                    </div>
                                    <div class="prodImg col-span-2 ">
                                        <img src="{{ asset('img/ingredientes/castanha.jpg') }}" class="w-full h-full rounded-lg" alt="" srcset="">
                                    </div>
                                </div>
                                <div class="item w-full rounded bg-white p-5 grid grid-cols-4 grid-rows-1">
                                    <div class="text col-span-2">
                                        <div class="titleProd text-xl">CREME DE NUTELLA</div>
                                        <div class="descProd mb-16 text-sm text-gray-400">alguma descrição do produto</div>
                                        <div class="valueProd text-sm text-green-800 flex justify-between px-1"> <input type="checkbox" class="input" name="include" id="include"></div>
                                    </div>
                                    <div class="prodImg col-span-2 ">
                                        <img src="{{ asset('img/ingredientes/castanha.jpg') }}" class="w-full h-full rounded-lg" alt="" srcset="">
                                    </div>
                                </div>
                            </div>
                            {{-- carrousel de itens mais pedidos --}}
                        </div>
                        <div class="emphasis flex flex-col gap-y-5 mb-10">
                            <h1 class="font-medium text-xl text-zinc-700">ACOMPANHAMENTOS</h1>
                            <div class="itens grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div class="item w-full rounded bg-white p-5 grid grid-cols-4 grid-rows-1">
                                    <div class="text col-span-2">
                                        <div class="titleProd text-base">M&M'S</div>
                                        <div class="descProd mb-16 text-sm text-gray-400">alguma descrição do produto</div>
                                        <div class="valueProd text-sm text-green-800 flex justify-between px-1"><input type="checkbox" class="input" name="include" id="include"></div>
                                    </div>
                                    <div class="prodImg col-span-2 ">
                                        <img src="{{ asset('img/ingredientes/castanha.jpg') }}" class="w-full h-full rounded-lg" alt="" srcset="">
                                    </div>
                                </div>
                            </div>
                            {{-- carrousel de itens mais pedidos --}}
                        </div>
                        <div class="emphasis flex flex-col gap-y-5 mb-10">
                            <h1 class="font-medium text-xl text-zinc-700">Bebidas </h1>
                            <div class="itens grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div class="item w-full rounded bg-white p-5 grid grid-cols-4 grid-rows-1">
                                    <div class="text col-span-2">
                                        <div class="titleProd text-base">titulo produto</div>
                                        <div class="descProd mb-16 text-sm text-gray-400">alguma descrição do produto</div>
                                        <div class="valueProd text-sm text-green-800 flex justify-between px-1">R$ 29,00 <input type="checkbox" class="input" name="include" id="include"></div>
                                    </div>
                                    <div class="prodImg col-span-2 ">
                                        <img src="{{ asset('img/ingredientes/castanha.jpg') }}" class="w-full h-full rounded-lg" alt="" srcset="">
                                    </div>
                                </div>
                            </div>
                            {{-- carrousel de itens mais pedidos --}}
                        </div>
                    </div>

                </section>
            </section>
            {{-- <div class="cart w-full h-full max-h-80 flex flex-col gap-y-4 max-w-xs fixed right-5">
                caso o carrinho esteja vazio apresente
                <div class="prodsCart  bg-white p-2 rounded-lg w-full h-full max-h-96">
                    quando não tiver produtos no carrinho
                    <div class="empytCart w-full h-44 flex flex-col justify-center items-center text-xl gap-y-3 text-neutral-500 invisible">
                        <span class="material-symbols-outlined text-3xl ">production_quantity_limits</span>
                        <span>Carrinho Vazio!</span>
                    </div>
                    --------------------------------
                    <div class="headCart w-full flex justify-between items-center border-b-2 border-b-zinc-600/25 shadow-sm py-2">
                        <div class="flex justify-center items-center gap-x-3 text-lg ">
                            <span class="material-symbols-outlined text-lg ">production_quantity_limits</span>
                            <p>Carrinho</p>
                        </div>
                        <div class="numberCart rounded-2xl bg-purple-400 w-6 h-6 flex justify-center items-center font-bold">
                            <span>1</span>
                        </div>
                    </div>
                    <div class="scrollProd  max-h-64 w-full h-full overflow-y-auto ">
                        <div class="prodCart h-full flex flex-col gap-y-4 py-3 text-xs border-b-2 border-b-gray-400 shadow-sm ">
                            <div class="inforProd flex justify-between items-start">
                               <div class="div flex flex-col justify-start items-start gap-y-4">
                                    <div class="NameProd text-base">(1x) Açai</div>
                                    <div class="sizeProd"><b>Tamanho:</b> Medio</div>
                                    <ul class="acomProd">
                                        <li class="font-semibold">Acompanhamentos:</li>
                                        <li>chocobol</li>
                                        <li>M&M</li>
                                        <li>Cereja</li>
                                        <li>Leite em Pó</li>
                                    </ul>
                                    <div class="syrupProd "> <b class="font-semibold">Calda:</b> Morango</div>
                               </div>
                               <div class="priceProd px-3 py-2 bg-purple-400/20 rounded-lg text-sm">
                                    <span>R$ 35,00</span>
                               </div>
                            </div>
                            <button class="text-red-300 p-2">Remover produto</button>
                        </div>

                    </div>
                </div>
                <div class="totalProd bg-white p-4 rounded-lg">
                    <div class="total flex justify-between items-center mb-5">
                        <span>Total</span>
                        <span>R$35,00</span>
                    </div>
                    <button class="requestProd p-2 flex justify-center items-center bg-green-600 w-full rounded" value="Fazer Pedido">Fazer Pedido</button>
                </div>
            </div> --}}

        </nav>
    </div>



@endsection
