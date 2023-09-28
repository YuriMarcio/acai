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
             <div class="categories w-full relative overflow-x-auto flex gap-x-5 justify-start items-center scrollbar-hide ">
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
                    <img src="{{ asset('img/acaipequeno.png') }}" class="w-full max-w-xs"  alt="localização">
                    <h2 class="text-xl font-bold" >Açai 330ml</h2>
                    <p class="text-slate-500/75">Açai de 330 ml natural sem adição de corante</p>
                    <div class="add w-full flex justify-between items-center text-fuchsia-700">
                        <p class="text-xl">R$ 22,00</p>
                        <button class="w-11 h-11  bg-fuchsia-700 flex justify-center items-center rounded-full text-white">
                            <span class="material-symbols-outlined">add</span>
                        </button>
                    </div>
                </div>

                <div class="item rounded-xl p-3 shadow-xl flex flex-col gap-2 justify-center items-start text-lg ">
                    <img src="{{ asset('img/acaipequeno.png') }}" class="w-full max-w-xs"  alt="localização">
                    <h2 class="text-xl font-bold" >Açai 330ml</h2>
                    <p class="text-slate-500/75">Açai de 330 ml natural sem adição de corante</p>
                    <div class="add w-full flex justify-between items-center text-fuchsia-700">
                        <p class="text-xl">R$ 22,00</p>
                        <button class="w-11 h-11  bg-fuchsia-700 flex justify-center items-center rounded-full text-white">
                            <span class="material-symbols-outlined">add</span>
                        </button>
                    </div>
                </div>

                <div class="item rounded-xl p-3 shadow-xl flex flex-col gap-2 justify-center items-start text-lg ">
                    <img src="{{ asset('img/acaipequeno.png') }}" class="w-full max-w-xs"  alt="localização">
                    <h2 class="text-xl font-bold" >Açai 330ml</h2>
                    <p class="text-slate-500/75">Açai de 330 ml natural sem adição de corante</p>
                    <div class="add w-full flex justify-between items-center text-fuchsia-700">
                        <p class="text-xl">R$ 22,00</p>
                        <button class="w-11 h-11  bg-fuchsia-700 flex justify-center items-center rounded-full text-white">
                            <span class="material-symbols-outlined">add</span>
                        </button>
                    </div>
                </div>

                <div class="item rounded-xl p-3 shadow-xl flex flex-col gap-2 justify-center items-start text-lg ">
                    <img src="{{ asset('img/acaipequeno.png') }}" class="w-full max-w-xs"  alt="localização">
                    <h2 class="text-xl font-bold" >Açai 330ml</h2>
                    <p class="text-slate-500/75">Açai de 330 ml natural sem adição de corante</p>
                    <div class="add w-full flex justify-between items-center text-fuchsia-700">
                        <p class="text-xl">R$ 22,00</p>
                        <button class="w-11 h-11  bg-fuchsia-700 flex justify-center items-center rounded-full text-white">
                            <span class="material-symbols-outlined">add</span>
                        </button>
                    </div>
                </div>
             </section>
        </section>

        <footer class="w-full bg-white fixed top-[89%] left-0 p-6 px-11 text-fuchsia-700 flex justify-between items-center rounded-t-3xl shadow-2xl">
            <button class="hover:bg-fuchsia-400 rounded-3xl" ><span class="material-symbols-outlined text-5xl">home</span></button>
            <button class="hover:bg-fuchsia-400 rounded-3xl" ><span class="material-symbols-outlined text-5xl">local_mall</span></button>
            <button class="hover:bg-fuchsia-400 rounded-3xl" ><span class="material-symbols-outlined text-5xl">account_circle</span></button>
        </footer>
    </section>

    <section class="desktop hidden lg:grid grid-cols-10 ">
        <section class="body col-span-7 flex flex-col gap-5 ">
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
                <div class="itens flex flex-col gap-6">
                    <h1 class="text-xl font-bold">Copos</h1>
                    <section class="itens grid grid-cols-2 sm:grid-cols-3  gap-3">
                        <div class="item rounded-xl p-3 shadow-xl flex flex-col gap-2 justify-center items-start text-lg ">
                            <img src="{{ asset('img/acaipequeno.png') }}" class="w-full max-w-xs"  alt="localização">
                            <h2 class="text-xl font-bold" >Açai 330ml</h2>
                            <p class="text-slate-500/75">Açai de 330 ml natural sem adição de corante</p>
                            <div class="add w-full flex justify-between items-center text-fuchsia-700">
                                <p class="text-xl">R$ 22,00</p>
                                <button class="w-11 h-11  bg-fuchsia-700 flex justify-center items-center rounded-full text-white">
                                    <span class="material-symbols-outlined">add</span>
                                </button>
                            </div>
                        </div>

                        <div class="item rounded-xl p-3 shadow-xl flex flex-col gap-2 justify-center items-start text-lg ">
                            <img src="{{ asset('img/acaipequeno.png') }}" class="w-full max-w-xs"  alt="localização">
                            <h2 class="text-xl font-bold" >Açai 330ml</h2>
                            <p class="text-slate-500/75">Açai de 330 ml natural sem adição de corante</p>
                            <div class="add w-full flex justify-between items-center text-fuchsia-700">
                                <p class="text-xl">R$ 22,00</p>
                                <button class="w-11 h-11  bg-fuchsia-700 flex justify-center items-center rounded-full text-white">
                                    <span class="material-symbols-outlined">add</span>
                                </button>
                            </div>
                        </div>

                        <div class="item rounded-xl p-3 shadow-xl flex flex-col gap-2 justify-center items-start text-lg ">
                            <img src="{{ asset('img/acaipequeno.png') }}" class="w-full max-w-xs"  alt="localização">
                            <h2 class="text-xl font-bold" >Açai 330ml</h2>
                            <p class="text-slate-500/75">Açai de 330 ml natural sem adição de corante</p>
                            <div class="add w-full flex justify-between items-center text-fuchsia-700">
                                <p class="text-xl">R$ 22,00</p>
                                <button class="w-11 h-11  bg-fuchsia-700 flex justify-center items-center rounded-full text-white">
                                    <span class="material-symbols-outlined">add</span>
                                </button>
                            </div>
                        </div>

                        <div class="item rounded-xl p-3 shadow-xl flex flex-col gap-2 justify-center items-start text-lg ">
                            <img src="{{ asset('img/acaipequeno.png') }}" class="w-full max-w-xs"  alt="localização">
                            <h2 class="text-xl font-bold" >Açai 330ml</h2>
                            <p class="text-slate-500/75">Açai de 330 ml natural sem adição de corante</p>
                            <div class="add w-full flex justify-between items-center text-fuchsia-700">
                                <p class="text-xl">R$ 22,00</p>
                                <button class="w-11 h-11  bg-fuchsia-700 flex justify-center items-center rounded-full text-white">
                                    <span class="material-symbols-outlined">add</span>
                                </button>
                            </div>
                        </div>
                     </section>
                </div>
                <div class="itens flex flex-col gap-6">
                    <h1 class="text-xl font-bold">Creme</h1>
                    <section class="itens grid grid-cols-2 sm:grid-cols-3  gap-3">
                        <div class="item rounded-xl p-3 shadow-xl flex flex-col gap-2 justify-center items-start text-lg ">
                            <img src="{{ asset('img/acaipequeno.png') }}" class="w-full max-w-xs"  alt="localização">
                            <h2 class="text-xl font-bold" >Açai 330ml</h2>
                            <p class="text-slate-500/75">Açai de 330 ml natural sem adição de corante</p>
                            <div class="add w-full flex justify-between items-center text-fuchsia-700">
                                <p class="text-xl">R$ 22,00</p>
                                <button class="w-11 h-11  bg-fuchsia-700 flex justify-center items-center rounded-full text-white">
                                    <span class="material-symbols-outlined">add</span>
                                </button>
                            </div>
                        </div>

                        <div class="item rounded-xl p-3 shadow-xl flex flex-col gap-2 justify-center items-start text-lg ">
                            <img src="{{ asset('img/acaipequeno.png') }}" class="w-full max-w-xs"  alt="localização">
                            <h2 class="text-xl font-bold" >Açai 330ml</h2>
                            <p class="text-slate-500/75">Açai de 330 ml natural sem adição de corante</p>
                            <div class="add w-full flex justify-between items-center text-fuchsia-700">
                                <p class="text-xl">R$ 22,00</p>
                                <button class="w-11 h-11  bg-fuchsia-700 flex justify-center items-center rounded-full text-white">
                                    <span class="material-symbols-outlined">add</span>
                                </button>
                            </div>
                        </div>

                        <div class="item rounded-xl p-3 shadow-xl flex flex-col gap-2 justify-center items-start text-lg ">
                            <img src="{{ asset('img/acaipequeno.png') }}" class="w-full max-w-xs"  alt="localização">
                            <h2 class="text-xl font-bold" >Açai 330ml</h2>
                            <p class="text-slate-500/75">Açai de 330 ml natural sem adição de corante</p>
                            <div class="add w-full flex justify-between items-center text-fuchsia-700">
                                <p class="text-xl">R$ 22,00</p>
                                <button class="w-11 h-11  bg-fuchsia-700 flex justify-center items-center rounded-full text-white">
                                    <span class="material-symbols-outlined">add</span>
                                </button>
                            </div>
                        </div>

                        <div class="item rounded-xl p-3 shadow-xl flex flex-col gap-2 justify-center items-start text-lg ">
                            <img src="{{ asset('img/acaipequeno.png') }}" class="w-full max-w-xs"  alt="localização">
                            <h2 class="text-xl font-bold" >Açai 330ml</h2>
                            <p class="text-slate-500/75">Açai de 330 ml natural sem adição de corante</p>
                            <div class="add w-full flex justify-between items-center text-fuchsia-700">
                                <p class="text-xl">R$ 22,00</p>
                                <button class="w-11 h-11  bg-fuchsia-700 flex justify-center items-center rounded-full text-white">
                                    <span class="material-symbols-outlined">add</span>
                                </button>
                            </div>
                        </div>
                     </section>
                </div>
                <div class="itens flex flex-col gap-6">
                    <h1 class="text-xl font-bold">Acompanhamento</h1>
                    <section class="itens grid grid-cols-2 sm:grid-cols-3  gap-3">
                        <div class="item rounded-xl p-3 shadow-xl flex flex-col gap-2 justify-center items-start text-lg ">
                            <img src="{{ asset('img/acaipequeno.png') }}" class="w-full max-w-xs"  alt="localização">
                            <h2 class="text-xl font-bold" >Açai 330ml</h2>
                            <p class="text-slate-500/75">Açai de 330 ml natural sem adição de corante</p>
                            <div class="add w-full flex justify-between items-center text-fuchsia-700">
                                <p class="text-xl">R$ 22,00</p>
                                <button class="w-11 h-11  bg-fuchsia-700 flex justify-center items-center rounded-full text-white">
                                    <span class="material-symbols-outlined">add</span>
                                </button>
                            </div>
                        </div>

                        <div class="item rounded-xl p-3 shadow-xl flex flex-col gap-2 justify-center items-start text-lg ">
                            <img src="{{ asset('img/acaipequeno.png') }}" class="w-full max-w-xs"  alt="localização">
                            <h2 class="text-xl font-bold" >Açai 330ml</h2>
                            <p class="text-slate-500/75">Açai de 330 ml natural sem adição de corante</p>
                            <div class="add w-full flex justify-between items-center text-fuchsia-700">
                                <p class="text-xl">R$ 22,00</p>
                                <button class="w-11 h-11  bg-fuchsia-700 flex justify-center items-center rounded-full text-white">
                                    <span class="material-symbols-outlined">add</span>
                                </button>
                            </div>
                        </div>

                        <div class="item rounded-xl p-3 shadow-xl flex flex-col gap-2 justify-center items-start text-lg ">
                            <img src="{{ asset('img/acaipequeno.png') }}" class="w-full max-w-xs"  alt="localização">
                            <h2 class="text-xl font-bold" >Açai 330ml</h2>
                            <p class="text-slate-500/75">Açai de 330 ml natural sem adição de corante</p>
                            <div class="add w-full flex justify-between items-center text-fuchsia-700">
                                <p class="text-xl">R$ 22,00</p>
                                <button class="w-11 h-11  bg-fuchsia-700 flex justify-center items-center rounded-full text-white">
                                    <span class="material-symbols-outlined">add</span>
                                </button>
                            </div>
                        </div>

                        <div class="item rounded-xl p-3 shadow-xl flex flex-col gap-2 justify-center items-start text-lg ">
                            <img src="{{ asset('img/acaipequeno.png') }}" class="w-full max-w-xs"  alt="localização">
                            <h2 class="text-xl font-bold" >Açai 330ml</h2>
                            <p class="text-slate-500/75">Açai de 330 ml natural sem adição de corante</p>
                            <div class="add w-full flex justify-between items-center text-fuchsia-700">
                                <p class="text-xl">R$ 22,00</p>
                                <button class="w-11 h-11  bg-fuchsia-700 flex justify-center items-center rounded-full text-white">
                                    <span class="material-symbols-outlined">add</span>
                                </button>
                            </div>
                        </div>
                     </section>
                </div>
             </div>


        </section>
        <section class="menulateralRight fixed right-0 top-0 w-[30.4%] h-full flex flex-col rounded-2xl bg-white col-span-3">
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
            <div class="card flex justify-between items-center shadowRounded  gap-4 p-4 ">
                <div class="flex justify-center items-center gap-2">
                    <img src="{{ asset('img/icon/card.svg') }}" alt="">
                    <div class="format">
                        <span class="text-slate-400">Forma de pagamento</span>
                        <p>Debito</p>
                    </div>
                </div>
               <button class="Button">
                <img src="{{ asset('img/icon/pencil.svg') }}" class="" alt="">
               </button>
            </div>
            <div class="location flex justify-between items-center shadowRounded  gap-4 p-4 ">
                <div class="format">
                    <span class="text-slate-400">Endereço</span>
                    <p>Rua general lott, 2341, centro</p>
                </div>
               <button class="Button">
                <img src="{{ asset('img/icon/pencil.svg') }}" class="" alt="">
               </button>
            </div>
            <div class="shadowRounded flex flex-col gap-4 p-4 ">
                <span class="text-slate-400 ">Meu pedido</span>
                <div class="orders h-36 p-4 flex flex-col justify-between gap-3 overflow-y-auto">
                    <div class="order p-2 flex justify-center items-center gap-2 border-b-2 rounded-xl">
                        <img src="{{ asset('img/acaimorango.png') }}" class="w-2/12" alt="">
                        <div class="description h-full flex flex-col justify-center gap-2 break-all">
                            <span>Açai 550ml</span>
                            <p>creme : Leite ninho</p>
                            <p class="">acom : confete, chocolate, morango, <b class="text-fuchsia-700">nozes</b></p>
                        </div>
                        <button class="remove Button p-3">
                        <img src="{{ asset('img/icon/remove.svg') }}" class="" alt="">
                        </button>
                    </div>

                </div>
                <button class="">
                    <img src="{{ asset('img/icon/plus.svg') }}" class="w-12 h-12" alt="">
                </button>
            </div>
            <div class="total flex flex-col justify-center items-center p-4 gap-5">
                <div class="flex justify-between items-center w-full text-xl">
                    <p>total : </p>
                    <p class="total text-fuchsia-700">
                        R$18,80
                    </p>
                </div>
                <button class="p-4 w-3/5 flex justify-center items-center bg-green-500 rounded-2xl">
                    Finalizar compra
                </button>
            </div>
        </section>
        <div id="infoleft" class="overlay hidden absolute left-0 top-0  bg-slate-500/80 w-screen h-full ">
            <button id="closeinfoleft" class=" absolute felx justify-center items-center right-10 top-4 bg-fuchsia-500 rounded-xl w-14 h-14">
                <span class="material-symbols-outlined text-4xl">close</span>
            </button>
            <section class="menulateralRight fixed left-0 top-0 w-[30.4%] h-full flex flex-col rounded-2xl bg-white col-span-3">
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
        </div>
    </section>
</section>
@endsection
