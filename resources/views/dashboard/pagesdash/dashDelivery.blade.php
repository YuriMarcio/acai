@extends('../dashboard/logged')
@extends('base')

@section('title')
DELIVERY
@endsection
@section('basedash')
<section class="setting hidden  w-full p-7 right-0 top-0 fixed  h-full z-10 rounded backdrop-blur-sm bg-white/30">
    <div class="headerConfig flex justify-between items-center w-full">
        <div class="title">
            <div class="flex gap-2 text-2xl font-medium">
                <span class="material-symbols-outlined font-medium text-4xl">settings</span>
                <h1>Configurações</h1>
            </div>
            <p class="text-sm text-slate-400 mb-4 flex items-center gap-x-1"><span class="material-symbols-outlined">info</span>Por aqui vc cadastra, edita e exclui itens</p>
        </div>
        <button class="hover:bg-purple-400 rounded-full justify-center items-center transition" ><span class="material-symbols-outlined text-3xl text-red-500 ">close</span></button>
    </div>
    <div class="bg-slate-100 flex h-[89%] flex-col overflow-y-auto gap-2 p-4 rounded-lg shadow-2xl">
        <h1 class="text-xl font-medium mb-3">Cadastar</h1>
        <div class="regisCopo flex flex-col gap-2">
            <label  class="text-lg font-medium ">Copos</label>
            <section id="cadastro  gap-2 w-full">
                <form class="grid grid-cols-4 gap-4" action="">
                    <input class="shadow appearance-none border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="nomeCopo" type="text" placeholder="Nome do Copo">
                    <input class="shadow appearance-none border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="descricaoCopo" type="text" placeholder="Descrição">
                    <input class="shadow appearance-none border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="valorCopo" type="text" placeholder="Valor">
                    <input class="shadow appearance-none border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="numeroCreme" type="number" placeholder="Quantos cremes">
                    <input class="shadow appearance-none border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="number" placeholder="Quantos acompanhamentos">
                    <input class="shadow appearance-none border rounded bg-white py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="numeroAcom" type="file">
                    <input class="shadow appearance-none bg-white border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline hover:bg-purple-400 cursor-pointer" id="username" type="submit" value="Adicionar" >
                </form>
            </section>
            <section id="bancoCopos" class="itens p-4 grid grid-cols-1 md:grid-cols-3 gap-4 border border-purple-400 rounded-xl ">
                <div class="item relative rounded bg-white p-5 grid-flow-col md:grid grid-cols-4 grid-rows-1">
                    <div class="text col-span-2">
                        <div class="titleProd text-base">AÇAI-300ML</div>
                        <div class="descProd md:mb-16 text-sm text-gray-400">AÇAI + 1 CREME + 2 ACOMPANHAMENTOS GRÁTIS</div>
                        <div class="valueProd text-sm text-green-800 flex justify-between md:px-1">R$ 12,50 <input type="checkbox" class="input" name="include" id="include"></div>
                    </div>
                    <div class="prodImg col-span-2 ">
                        <img src="{{ asset('img/ingredientes/castanha.jpg') }}" class="w-full h-full rounded-lg" alt="" srcset="">
                    </div>
                    <span class="material-symbols-outlined absolute top-0 right-0 text-base cursor-pointer text-purple-400 ">edit</span>
                </div>
                <div class="item w-full relative rounded bg-white p-5 grid-flow-col lg:grid grid-cols-4 grid-rows-1">
                    <div class="text col-span-2">
                        <div class="titleProd text-base">AÇAI-300ML</div>
                        <div class="descProd md:mb-16 text-sm text-gray-400">AÇAI + 1 CREME + 2 ACOMPANHAMENTOS GRÁTIS</div>
                        <div class="valueProd text-sm text-green-800 flex justify-between md:px-1">R$ 12,50 <input type="checkbox" class="input" name="include" id="include"></div>
                    </div>
                    <div class="prodImg col-span-2 ">
                        <img src="{{ asset('img/ingredientes/castanha.jpg') }}" class="w-full h-full rounded-lg" alt="" srcset="">
                    </div>
                    <span class="material-symbols-outlined absolute top-0 right-0 text-base cursor-pointer text-purple-400 ">edit</span>
                </div>
                <div class="item w-full relative rounded bg-white p-5 grid-flow-col md:grid grid-cols-4 grid-rows-1">
                    <div class="text col-span-2">
                        <div class="titleProd text-base">AÇAI-300ML</div>
                        <div class="descProd md:mb-16 text-sm text-gray-400">AÇAI + 1 CREME + 2 ACOMPANHAMENTOS GRÁTIS</div>
                        <div class="valueProd text-sm text-green-800 flex justify-between md:px-1">R$ 12,50 <input type="checkbox" class="input" name="include" id="include"></div>
                    </div>
                    <div class="prodImg col-span-2 ">
                        <img src="{{ asset('img/ingredientes/castanha.jpg') }}" class="w-full h-full rounded-lg" alt="" srcset="">
                    </div>
                    <span class="material-symbols-outlined absolute top-0 right-0 text-base cursor-pointer text-purple-400 ">edit</span>
                </div>
            </section>
        </div>

        <div class="regisCreme flex flex-col gap-2">
            <label class="text-lg font-medium ">Creme</label>
            <section id="cadastro  gap-2 w-full ">
                <form class="grid grid-cols-5 gap-2 mb-4" action="">
                    <input class="shadow appearance-none border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="Nome do Copo">
                    <input class="shadow appearance-none border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="Descrição">
                    <input class="shadow appearance-none border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="Valor">
                    <input class="shadow appearance-none border rounded py-2 px-3 bg-white text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="numeroAcom" type="file">
                    <input class="shadow appearance-none border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline hover:bg-purple-400 cursor-pointer bg-white" id="username" type="submit" value="Adicionar" >
                </form>
                <section id="bancoCopos" class="itens p-4 grid grid-cols-1 md:grid-cols-3 gap-4 border border-purple-400 rounded-xl ">
                    <div class="item relative rounded bg-white p-5 grid-flow-col md:grid grid-cols-4 grid-rows-1">
                        <div class="text col-span-2">
                            <div class="titleProd text-base">AÇAI-300ML</div>
                            <div class="descProd md:mb-16 text-sm text-gray-400">AÇAI + 1 CREME + 2 ACOMPANHAMENTOS GRÁTIS</div>
                            <div class="valueProd text-sm text-green-800 flex justify-between md:px-1">R$ 12,50 <input type="checkbox" class="input" name="include" id="include"></div>
                        </div>
                        <div class="prodImg col-span-2 ">
                            <img src="{{ asset('img/ingredientes/castanha.jpg') }}" class="w-full h-full rounded-lg" alt="" srcset="">
                        </div>
                        <span class="material-symbols-outlined absolute top-0 right-0 text-base cursor-pointer text-purple-400 ">edit</span>
                    </div>
                    <div class="item w-full relative rounded bg-white p-5 grid-flow-col lg:grid grid-cols-4 grid-rows-1">
                        <div class="text col-span-2">
                            <div class="titleProd text-base">AÇAI-300ML</div>
                            <div class="descProd md:mb-16 text-sm text-gray-400">AÇAI + 1 CREME + 2 ACOMPANHAMENTOS GRÁTIS</div>
                            <div class="valueProd text-sm text-green-800 flex justify-between md:px-1">R$ 12,50 <input type="checkbox" class="input" name="include" id="include"></div>
                        </div>
                        <div class="prodImg col-span-2 ">
                            <img src="{{ asset('img/ingredientes/castanha.jpg') }}" class="w-full h-full rounded-lg" alt="" srcset="">
                        </div>
                        <span class="material-symbols-outlined absolute top-0 right-0 text-base cursor-pointer text-purple-400 ">edit</span>
                    </div>
                    <div class="item w-full relative rounded bg-white p-5 grid-flow-col md:grid grid-cols-4 grid-rows-1">
                        <div class="text col-span-2">
                            <div class="titleProd text-base">AÇAI-300ML</div>
                            <div class="descProd md:mb-16 text-sm text-gray-400">AÇAI + 1 CREME + 2 ACOMPANHAMENTOS GRÁTIS</div>
                            <div class="valueProd text-sm text-green-800 flex justify-between md:px-1">R$ 12,50 <input type="checkbox" class="input" name="include" id="include"></div>
                        </div>
                        <div class="prodImg col-span-2 ">
                            <img src="{{ asset('img/ingredientes/castanha.jpg') }}" class="w-full h-full rounded-lg" alt="" srcset="">
                        </div>
                        <span class="material-symbols-outlined absolute top-0 right-0 text-base cursor-pointer text-purple-400 ">edit</span>
                    </div>
                </section>
            </section>
        </div>

        <div class="regisCompa flex flex-col gap-2">
            <label class="text-lg font-medium ">Acompanhamento</label>
            <section id="cadastro gap-2 w-full">
                <form class="grid grid-cols-5 gap-2 mb-4" action="">
                    <input class="shadow appearance-none border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="Nome do Copo">
                    <input class="shadow appearance-none border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="Descrição">
                    <input class="shadow appearance-none border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="Valor">
                    <input class="shadow appearance-none border rounded py-2 px-3 bg-white text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="numeroAcom" type="file">
                    <input class="shadow appearance-none border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline hover:bg-purple-400 cursor-pointer bg-white" id="username" type="submit" value="Adicionar" >
                </form>
            </section>
            <section id="bancoCopos" class="itens p-4 grid grid-cols-1 md:grid-cols-3 gap-4 border border-purple-400 rounded-xl ">
                <div class="item relative rounded bg-white p-5 grid-flow-col md:grid grid-cols-4 grid-rows-1">
                    <div class="text col-span-2">
                        <div class="titleProd text-base">AÇAI-300ML</div>
                        <div class="descProd md:mb-16 text-sm text-gray-400">AÇAI + 1 CREME + 2 ACOMPANHAMENTOS GRÁTIS</div>
                        <div class="valueProd text-sm text-green-800 flex justify-between md:px-1">R$ 12,50 <input type="checkbox" class="input" name="include" id="include"></div>
                    </div>
                    <div class="prodImg col-span-2 ">
                        <img src="{{ asset('img/ingredientes/castanha.jpg') }}" class="w-full h-full rounded-lg" alt="" srcset="">
                    </div>
                    <span class="material-symbols-outlined absolute top-0 right-0 text-base cursor-pointer text-purple-400 ">edit</span>
                </div>
                <div class="item w-full relative rounded bg-white p-5 grid-flow-col lg:grid grid-cols-4 grid-rows-1">
                    <div class="text col-span-2">
                        <div class="titleProd text-base">AÇAI-300ML</div>
                        <div class="descProd md:mb-16 text-sm text-gray-400">AÇAI + 1 CREME + 2 ACOMPANHAMENTOS GRÁTIS</div>
                        <div class="valueProd text-sm text-green-800 flex justify-between md:px-1">R$ 12,50 <input type="checkbox" class="input" name="include" id="include"></div>
                    </div>
                    <div class="prodImg col-span-2 ">
                        <img src="{{ asset('img/ingredientes/castanha.jpg') }}" class="w-full h-full rounded-lg" alt="" srcset="">
                    </div>
                    <span class="material-symbols-outlined absolute top-0 right-0 text-base cursor-pointer text-purple-400 ">edit</span>
                </div>
                <div class="item w-full relative rounded bg-white p-5 grid-flow-col md:grid grid-cols-4 grid-rows-1">
                    <div class="text col-span-2">
                        <div class="titleProd text-base">AÇAI-300ML</div>
                        <div class="descProd md:mb-16 text-sm text-gray-400">AÇAI + 1 CREME + 2 ACOMPANHAMENTOS GRÁTIS</div>
                        <div class="valueProd text-sm text-green-800 flex justify-between md:px-1">R$ 12,50 <input type="checkbox" class="input" name="include" id="include"></div>
                    </div>
                    <div class="prodImg col-span-2 ">
                        <img src="{{ asset('img/ingredientes/castanha.jpg') }}" class="w-full h-full rounded-lg" alt="" srcset="">
                    </div>
                    <span class="material-symbols-outlined absolute top-0 right-0 text-base cursor-pointer text-purple-400 ">edit</span>
                </div>
            </section>
        </div>
    </div>
</section>
<div class="configDelivery p-4">
    <div class="relative">
        <h1 class="text-xl cursor-pointer font-semibold flex items-center justify-between">Delivery <span class="material-symbols-outlined text-md ">settings</span></h1>
    </div>
    <p class="text-sm text-slate-400 mb-4 flex items-center gap-x-1"><span class="material-symbols-outlined">info</span>A aba de delivery é a onde você irá cadastrar produtos alterar e receber novos pedidos.</p>
    <section class="info w-full grid grid-cols-3 gap-2 ">
        <div class="infoPedidos relative bg-white rounded-2xl p-2 h-full max-h-40 border-2 border-purple-400">
            <span class="text-slate-400">total de pedidos:</span>
            <h1 class="text-xl">45</h1>
        </div>
        <div class="infototal bg-white rounded-2xl p-4 h-full max-h-40 border-2 border-purple-400">
            <span class="text-slate-400">total dia:</span>
            <h1 class="text-xl">R$45</h1>
        </div>
        <div class="infototal bg-white rounded-2xl flex flex-col gap-2 p-4 h-full max-h-40 border-2 border-purple-400">
            <span class="text-slate-400">Configuração de delivery</span>

            <div class="flex">
                <label class="relative inline-flex items-center cursor-pointer">
                    <input type="checkbox" value="" class="sr-only peer" checked>
                    <div class="w-11 h-6 bg-gray-200 rounded-full peer peer-focus:ring-4  dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-purple-400"></div>
                </label>
                <span class="ml-3 text- font-medium text-gray-900 dark:text-gray-300">desligar/ligar operação</span>
            </div>
    </section>
    <section class="newPedidos py-4">
        <h1 class="text-lg font-semibold">Novos pedidos</h1>
        <div class="grid grid-cols-3 py-4 gap-4">
            <div class="pedido border border-purple-400 bg-white rounded-md p-4 text-sm">
                <div class="header flex justify-between items-center ">
                    <div class="">
                        <div class="order">
                            id #4444
                        </div>
                        <div class="date text-slate-300">
                            23 jan 2023, 20:30
                        </div>
                    </div>
                    <div class="profile">
                        <img src="{{ asset('img/Avatar.png') }}" class="rounded-full h-16 max-h-10" alt="Imagem">
                    </div>
                </div>
                <div class="body mb-4">
                    <div class="item w-ful border-b py-4 border-gray-400">
                        <h3 class="font-semibold">Pedido 1 :</h3>
                        <p>Copo: 300ml</p>
                        <p>Creme: Creme de morango</p>
                        <p>acompanhamento: m&m - castanha - morango</p>
                    </div>
                    <div class="item w-ful border-b py-4 border-gray-400">
                        <h3 class="font-semibold">Pedido 2 :</h3>
                        <p>Copo: 400ml</p>
                        <p>Creme: Creme de morango</p>
                        <p>acompanhamento: m&m - castanha - morango - farinha</p>
                    </div>
                </div>
                <div class="footer flex justify-between">
                    <div class="preco">
                        <span>total :</span>
                        <p>R$ 14,50</p>
                    </div>
                    <div class="aceitar flex gap-x-4">
                        <button id="negar" class="w-10 h-10 rounded-md border-2 border-red-500 hover:bg-red-500/20" >
                            <span class="material-symbols-outlined text-red-500">close</span>
                        </button>
                        <button id="aceitar" class="w-10 h-10 rounded-md border-2 border-green-500 hover:bg-green-500/20" >
                            <span class="material-symbols-outlined text-green-500">check</span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="pedido border border-purple-400 bg-white rounded-md p-4 text-sm">
                <div class="header flex justify-between items-center ">
                    <div class="">
                        <div class="order">
                            id #4444
                        </div>
                        <div class="date text-slate-300">
                            23 jan 2023, 20:30
                        </div>
                    </div>
                    <div class="profile">
                        <img src="{{ asset('img/Avatar.png') }}" class="rounded-full h-16 max-h-10" alt="Imagem">
                    </div>
                </div>
                <div class="body mb-4">
                    <div class="item w-ful border-b py-4 border-gray-400">
                        <h3 class="font-semibold">Pedido 1 :</h3>
                        <p>Copo: 300ml</p>
                        <p>Creme: Creme de morango</p>
                        <p>acompanhamento: m&m - castanha - morango</p>
                    </div>

                    <div class="item w-ful border-b py-4 border-gray-400">
                        <h3 class="font-semibold">Pedido 2 :</h3>
                        <p>Copo: 400ml</p>
                        <p>Creme: Creme de morango</p>
                        <p>acompanhamento: m&m - castanha - morango - farinha</p>
                    </div>
                </div>
                <div class="footer flex justify-between">
                    <div class="preco">
                        <span>total :</span>
                        <p>R$ 14,50</p>
                    </div>
                    <div class="aceitar flex gap-x-4">
                        <button id="negar" class="w-10 h-10 rounded-md border-2 border-red-500 hover:bg-red-500/20" >
                            <span class="material-symbols-outlined text-red-500">close</span>
                        </button>
                        <button id="aceitar" class="w-10 h-10 rounded-md border-2 border-green-500 hover:bg-green-500/20" >
                            <span class="material-symbols-outlined text-green-500">check</span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="pedido border border-purple-400 bg-white rounded-md p-4 text-sm">
                <div class="header flex justify-between items-center ">
                    <div class="">
                        <div class="order">
                            id #4444
                        </div>
                        <div class="date text-slate-300">
                            23 jan 2023, 20:30
                        </div>
                    </div>
                    <div class="profile">
                        <img src="{{ asset('img/Avatar.png') }}" class="rounded-full h-16 max-h-10" alt="Imagem">
                    </div>
                </div>
                <div class="body mb-4">
                    <div class="item w-ful border-b py-4 border-gray-400">
                        <h3 class="font-semibold">Pedido 1 :</h3>
                        <p>Copo: 300ml</p>
                        <p>Creme: Creme de morango</p>
                        <p>acompanhamento: m&m - castanha - morango</p>
                    </div>
                    <div class="item w-ful border-b py-4 border-gray-400">
                        <h3 class="font-semibold">Pedido 2 :</h3>
                        <p>Copo: 400ml</p>
                        <p>Creme: Creme de morango</p>
                        <p>acompanhamento: m&m - castanha - morango - farinha</p>
                    </div>
                </div>
                <div class="footer flex justify-between">
                    <div class="preco">
                        <span>total :</span>
                        <p>R$ 14,50</p>
                    </div>
                    <div class="aceitar flex gap-x-4">
                        <button id="negar" class="w-10 h-10 rounded-md border-2 border-red-500 hover:bg-red-500/20" >
                            <span class="material-symbols-outlined text-red-500">close</span>
                        </button>
                        <button id="aceitar" class="w-10 h-10 rounded-md border-2 border-green-500 hover:bg-green-500/20" >
                            <span class="material-symbols-outlined text-green-500">check</span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="pedido border border-purple-400 bg-white rounded-md p-4 text-sm">
                <div class="header flex justify-between items-center ">
                    <div class="">
                        <div class="order">
                            id #4444
                        </div>
                        <div class="date text-slate-300">
                            23 jan 2023, 20:30
                        </div>
                    </div>
                    <div class="profile">
                        <img src="{{ asset('img/Avatar.png') }}" class="rounded-full h-16 max-h-10" alt="Imagem">
                    </div>
                </div>
                <div class="body mb-4">
                    <div class="item w-ful border-b py-4 border-gray-400">
                        <h3 class="font-semibold">Pedido 1 :</h3>
                        <p>Copo: 300ml</p>
                        <p>Creme: Creme de morango</p>
                        <p>acompanhamento: m&m - castanha - morango</p>
                    </div>
                    <div class="item w-ful border-b py-4 border-gray-400">
                        <h3 class="font-semibold">Pedido 2 :</h3>
                        <p>Copo: 400ml</p>
                        <p>Creme: Creme de morango</p>
                        <p>acompanhamento: m&m - castanha - morango - farinha</p>
                    </div>
                </div>
                <div class="footer flex justify-between">
                    <div class="preco">
                        <span>total :</span>
                        <p>R$ 14,50</p>
                    </div>
                    <div class="aceitar flex gap-x-4">
                        <button id="negar" class="w-10 h-10 rounded-md border-2 border-red-500 hover:bg-red-500/20" >
                            <span class="material-symbols-outlined text-red-500">close</span>
                        </button>
                        <button id="aceitar" class="w-10 h-10 rounded-md border-2 border-green-500 hover:bg-green-500/20" >
                            <span class="material-symbols-outlined text-green-500">check</span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="pedido border border-purple-400 bg-white rounded-md p-4 text-sm">
                <div class="header flex justify-between items-center ">
                    <div class="">
                        <div class="order">
                            id #4444
                        </div>
                        <div class="date text-slate-300">
                            23 jan 2023, 20:30
                        </div>
                    </div>
                    <div class="profile">
                        <img src="{{ asset('img/Avatar.png') }}" class="rounded-full h-16 max-h-10" alt="Imagem">
                    </div>
                </div>
                <div class="body mb-4">
                    <div class="item w-ful border-b py-4 border-gray-400">
                        <h3 class="font-semibold">Pedido 1 :</h3>
                        <p>Copo: 300ml</p>
                        <p>Creme: Creme de morango</p>
                        <p>acompanhamento: m&m - castanha - morango</p>
                    </div>
                    <div class="item w-ful border-b py-4 border-gray-400">
                        <h3 class="font-semibold">Pedido 2 :</h3>
                        <p>Copo: 400ml</p>
                        <p>Creme: Creme de morango</p>
                        <p>acompanhamento: m&m - castanha - morango - farinha</p>
                    </div>
                </div>
                <div class="footer flex justify-between">
                    <div class="preco">
                        <span>total :</span>
                        <p>R$ 14,50</p>
                    </div>
                    <div class="aceitar flex gap-x-4">
                        <button id="negar" class="w-10 h-10 rounded-md border-2 border-red-500 hover:bg-red-500/20" >
                            <span class="material-symbols-outlined text-red-500">close</span>
                        </button>
                        <button id="aceitar" class="w-10 h-10 rounded-md border-2 border-green-500 hover:bg-green-500/20" >
                            <span class="material-symbols-outlined text-green-500">check</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="newPedidos py-4">
        <div class="headless relative flex justify-between">
            <h1 class="text-lg font-semibold">Pedidos Concluídos : </h1>
            <button class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded-lg">filtrar</button>
            <div class="container mx-auto p-4 absolute max-w-xs -top-4 -right-4">
                <div class="bg-white p-4 shadow-2xl border border-purple-400 rounded">
                  <h2 class="text-lg font-semibold mb-2">Selecione um intervalo de datas:</h2>
                  <div class="flex flex-wrap gap-4 mb-4">
                    <div class=" w-full ">
                      <label for="startDate" class="block text-sm font-medium text-gray-700">Data inicial:</label>
                      <input type="date" id="startDate" name="startDate" class="form-input mt-1 block w-full" />
                    </div>
                    <div class="line w-full h-0.5 bg-slate-300 rounded"></div>
                    <div class="w-full">
                      <label for="endDate" class="block text-sm font-medium text-gray-700">Data final:</label>
                      <input type="date" id="endDate" name="endDate" class="form-input mt-1 block w-full" />
                    </div>
                  </div>
                  <button class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded">Aplicar</button>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-3 py-4 gap-4">
            <div class="pedido border border-purple-400 bg-white rounded-md p-4 text-sm">
                <div class="header flex justify-between items-center ">
                    <div class="">
                        <div class="order">
                            id #4444
                        </div>
                        <div class="date text-slate-300">
                            23 jan 2023, 20:30
                        </div>
                    </div>
                    <div class="profile">
                        <img src="{{ asset('img/Avatar.png') }}" class="rounded-full h-16 max-h-10" alt="Imagem">
                    </div>
                </div>
                <div class="body mb-4">
                    <div class="item w-ful border-b py-4 border-gray-400">
                        <h3 class="font-semibold">Pedido 1 :</h3>
                        <p>Copo: 300ml</p>
                        <p>Creme: Creme de morango</p>
                        <p>acompanhamento: m&m - castanha - morango</p>
                    </div>
                    <div class="item w-ful border-b py-4 border-gray-400">
                        <h3 class="font-semibold">Pedido 2 :</h3>
                        <p>Copo: 400ml</p>
                        <p>Creme: Creme de morango</p>
                        <p>acompanhamento: m&m - castanha - morango - farinha</p>
                    </div>
                </div>
                <div class="footer flex justify-between">
                    <div class="preco">
                        <span>total :</span>
                        <p>R$ 14,50</p>
                    </div>
                    <div class="aceitar flex gap-x-4">
                        <button id="negar" class="w-10 h-10 rounded-md border-2 border-red-500 hover:bg-red-500/20" >
                            <span class="material-symbols-outlined text-red-500">close</span>
                        </button>
                        <button id="aceitar" class="w-10 h-10 rounded-md border-2 border-green-500 hover:bg-green-500/20" >
                            <span class="material-symbols-outlined text-green-500">check</span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="pedido border border-purple-400 bg-white rounded-md p-4 text-sm">
                <div class="header flex justify-between items-center ">
                    <div class="">
                        <div class="order">
                            id #4444
                        </div>
                        <div class="date text-slate-300">
                            23 jan 2023, 20:30
                        </div>
                    </div>
                    <div class="profile">
                        <img src="{{ asset('img/Avatar.png') }}" class="rounded-full h-16 max-h-10" alt="Imagem">
                    </div>
                </div>
                <div class="body mb-4">
                    <div class="item w-ful border-b py-4 border-gray-400">
                        <h3 class="font-semibold">Pedido 1 :</h3>
                        <p>Copo: 300ml</p>
                        <p>Creme: Creme de morango</p>
                        <p>acompanhamento: m&m - castanha - morango</p>
                    </div>
                    <div class="item w-ful border-b py-4 border-gray-400">
                        <h3 class="font-semibold">Pedido 2 :</h3>
                        <p>Copo: 400ml</p>
                        <p>Creme: Creme de morango</p>
                        <p>acompanhamento: m&m - castanha - morango - farinha</p>
                    </div>
                </div>
                <div class="footer flex justify-between">
                    <div class="preco">
                        <span>total :</span>
                        <p>R$ 14,50</p>
                    </div>
                    <div class="aceitar flex gap-x-4">
                        <button id="negar" class="w-10 h-10 rounded-md border-2 border-red-500 hover:bg-red-500/20" >
                            <span class="material-symbols-outlined text-red-500">close</span>
                        </button>
                        <button id="aceitar" class="w-10 h-10 rounded-md border-2 border-green-500 hover:bg-green-500/20" >
                            <span class="material-symbols-outlined text-green-500">check</span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="pedido border border-purple-400 bg-white rounded-md p-4 text-sm">
                <div class="header flex justify-between items-center ">
                    <div class="">
                        <div class="order">
                            id #4444
                        </div>
                        <div class="date text-slate-300">
                            23 jan 2023, 20:30
                        </div>
                    </div>
                    <div class="profile">
                        <img src="{{ asset('img/Avatar.png') }}" class="rounded-full h-16 max-h-10" alt="Imagem">
                    </div>
                </div>
                <div class="body mb-4">
                    <div class="item w-ful border-b py-4 border-gray-400">
                        <h3 class="font-semibold">Pedido 1 :</h3>
                        <p>Copo: 300ml</p>
                        <p>Creme: Creme de morango</p>
                        <p>acompanhamento: m&m - castanha - morango</p>
                    </div>
                    <div class="item w-ful border-b py-4 border-gray-400">
                        <h3 class="font-semibold">Pedido 2 :</h3>
                        <p>Copo: 400ml</p>
                        <p>Creme: Creme de morango</p>
                        <p>acompanhamento: m&m - castanha - morango - farinha</p>
                    </div>
                </div>
                <div class="footer flex justify-between">
                    <div class="preco">
                        <span>total :</span>
                        <p>R$ 14,50</p>
                    </div>
                    <div class="aceitar flex gap-x-4">
                        <button id="negar" class="w-10 h-10 rounded-md border-2 border-red-500 hover:bg-red-500/20" >
                            <span class="material-symbols-outlined text-red-500">close</span>
                        </button>
                        <button id="aceitar" class="w-10 h-10 rounded-md border-2 border-green-500 hover:bg-green-500/20" >
                            <span class="material-symbols-outlined text-green-500">check</span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="pedido border border-purple-400 bg-white rounded-md p-4 text-sm">
                <div class="header flex justify-between items-center ">
                    <div class="">
                        <div class="order">
                            id #4444
                        </div>
                        <div class="date text-slate-300">
                            23 jan 2023, 20:30
                        </div>
                    </div>
                    <div class="profile">
                        <img src="{{ asset('img/Avatar.png') }}" class="rounded-full h-16 max-h-10" alt="Imagem">
                    </div>
                </div>
                <div class="body mb-4">
                    <div class="item w-ful border-b py-4 border-gray-400">
                        <h3 class="font-semibold">Pedido 1 :</h3>
                        <p>Copo: 300ml</p>
                        <p>Creme: Creme de morango</p>
                        <p>acompanhamento: m&m - castanha - morango</p>
                    </div>
                    <div class="item w-ful border-b py-4 border-gray-400">
                        <h3 class="font-semibold">Pedido 2 :</h3>
                        <p>Copo: 400ml</p>
                        <p>Creme: Creme de morango</p>
                        <p>acompanhamento: m&m - castanha - morango - farinha</p>
                    </div>
                </div>
                <div class="footer flex justify-between">
                    <div class="preco">
                        <span>total :</span>
                        <p>R$ 14,50</p>
                    </div>
                    <div class="aceitar flex gap-x-4">
                        <button id="negar" class="w-10 h-10 rounded-md border-2 border-red-500 hover:bg-red-500/20" >
                            <span class="material-symbols-outlined text-red-500">close</span>
                        </button>
                        <button id="aceitar" class="w-10 h-10 rounded-md border-2 border-green-500 hover:bg-green-500/20" >
                            <span class="material-symbols-outlined text-green-500">check</span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="pedido border border-purple-400 bg-white rounded-md p-4 text-sm">
                <div class="header flex justify-between items-center ">
                    <div class="">
                        <div class="order">
                            id #4444
                        </div>
                        <div class="date text-slate-300">
                            23 jan 2023, 20:30
                        </div>
                    </div>
                    <div class="profile">
                        <img src="{{ asset('img/Avatar.png') }}" class="rounded-full h-16 max-h-10" alt="Imagem">
                    </div>
                </div>
                <div class="body mb-4">
                    <div class="item w-ful border-b py-4 border-gray-400">
                        <h3 class="font-semibold">Pedido 1 :</h3>
                        <p>Copo: 300ml</p>
                        <p>Creme: Creme de morango</p>
                        <p>acompanhamento: m&m - castanha - morango</p>
                    </div>
                    <div class="item w-ful border-b py-4 border-gray-400">
                        <h3 class="font-semibold">Pedido 2 :</h3>
                        <p>Copo: 400ml</p>
                        <p>Creme: Creme de morango</p>
                        <p>acompanhamento: m&m - castanha - morango - farinha</p>
                    </div>
                </div>
                <div class="footer flex justify-between">
                    <div class="preco">
                        <span>total :</span>
                        <p>R$ 14,50</p>
                    </div>
                    <div class="aceitar flex gap-x-4">
                        <button id="negar" class="w-10 h-10 rounded-md border-2 border-red-500 hover:bg-red-500/20" >
                            <span class="material-symbols-outlined text-red-500">close</span>
                        </button>
                        <button id="aceitar" class="w-10 h-10 rounded-md border-2 border-green-500 hover:bg-green-500/20" >
                            <span class="material-symbols-outlined text-green-500">check</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection

