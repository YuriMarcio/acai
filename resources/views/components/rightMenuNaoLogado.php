@extends('delivery')

@section('teste')
<div class="profile flex justify-between p-4 items-center shadowRounded">
    <div class="w-full flex items-center space-x-4 justify-between">
        <img class="w-14 h-14 rounded-full" src="{{ asset('img/icon/naoLogado.gif') }}" alt="">
        <div class="font-medium dark:text-white">
           <a class="text-lg cursor-pointer hover:text-xl transition-all border-2 hover:bg-fuchsia-100 hover:shadowRounded p-1 rounded-xl">
                entrar | cadastrar
           </a>
        </div>
    </div>
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

@endsection
