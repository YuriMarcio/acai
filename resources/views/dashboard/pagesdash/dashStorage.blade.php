@extends('../dashboard/logged')
@extends('base')

@section('title')
Estoque
@endsection
@section('basedash')
  <section class="estoque p-4 flex flex-col gap-10">
    	<div class="header font-bold flex text-fuchsia-700 text-2xl justify-start gap-3 items-center">
            <span class="material-symbols-outlined font-bold">trolley</span>
            <h1 class="">Estoque</h1>
        </div>
        <section class="infs w-full flex justify-center gap-60 items-center ">
            <div class="info shadowRounded flex flex-col justify-center items-center p-4 ">
                <h1>total de itens</h1>
                <p class="number">50</p>
            </div>
            <div class="info shadowRounded flex flex-col justify-center items-center p-4 ">
                <h1>total de itens</h1>
                <p class="number">50</p>
            </div>
            <div class="info shadowRounded flex flex-col justify-center items-center p-4 ">
                <h1>total de itens</h1>
                <p class="number">50</p>
            </div>
        </section>
        <section class="itens flex flex-col gap-5">
            <div class="filter grid grid-cols-3 justify-center items-center gap-4">
                <h1 class="text-xl font-semibold">Produtos</h1>
                <form class="relative -left-32" action="{{ route('dash.estoque') }}" method="GET">
                    <div class="relative w-11/12">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                            </svg>
                        </div>
                        <input type="search" name="q" id="default-search" class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Pesquisar produto">
                        <button type="submit" class="text-white absolute top-2 right-3  focus:ring-4 focus:outline-none bg-fuchsia-700 font-medium rounded-lg text-sm px-4 py-2 ">Search</button>
                    </div>
                </form>
                <div class="flex justify-center gap-4 items-center ">
                    <button id="plusProduct" class="flex justify-center items-center border-2 border-fuchsia-700 rounded-xl gap-2 p-2">
                        <span class="material-symbols-outlined font-bold text-fuchsia-700 ">add</span>
                        Produto
                    </button>
                    {{-- <button class="flex justify-center items-center border-2 border-fuchsia-700 rounded-xl gap-2 p-2">
                        <span class="material-symbols-outlined font-bold text-fuchsia-700 ">tune</span>
                        filtro
                    </button> --}}
                    <button id="plusCategorie"  class="testecat flex justify-center items-center border-2 border-fuchsia-700 rounded-xl gap-2 p-2">
                        <span class="material-symbols-outlined font-bold text-fuchsia-700 ">add</span>
                        Categoria
                    </button>
                </div>
            </div>
            <div class="products flex flex-col gap-7 ">
                @foreach ($listarProd as $prod )
                    <div class="product shadowRounded grid grid-cols-10  grid-flow-row-dense gap-3 break-all justify-center items-start  p-2">
                        <img class="w-20 rounded-full" src="{{ asset('img/productImg/' . $prod->imageProd) }}" alt="">
                        <div class="flex flex-col gap-5 text-lg  name">
                            <div class="title text-sm text-slate-400">Nome</div>
                            <p>{{$prod->nameProd}}</p>
                        </div>
                        <div class="flex flex-col gap-5 text-lg col-span-3   description">
                            <div class="title text-sm text-slate-400">Descrição</div>
                            <p >{{$prod->descriProd}}</p>
                        </div>
                        <div class="flex flex-col gap-5 text-lg  categorie">
                            <div class="title text-sm text-slate-400">Categoria</div>
                            <p>{{ $prod->categoria->nome }}</p>
                        </div>
                        <div class="flex flex-col gap-5 text-lg  amount">
                            <div class="title text-sm text-slate-400">quantidade</div>
                            <p>{{$prod->amountProd}} Kg</p>
                        </div>
                        <div class="flex flex-col gap-5 text-lg  price">
                            <div class="title text-sm text-slate-400">Preço</div>
                            <p>R${{$prod->unitPriceProd}}</p>
                        </div>
                        <div class="flex flex-col gap-5 text-lg  price">
                            <div class="title text-sm text-slate-400">fornecedor</div>
                            <p>{{$prod->supplierProd}}</p>
                        </div>
                        <div class="grid grid-col-1 grid-rows-2 gap-2 justify-center items-start p-2">
                            <button data-id="{{$prod->id}}" class="editbutton  bg-yellow-400 w-16 h-16 rounded-xl">
                                <span class="material-symbols-outlined text-white text-3xl">edit</span>
                            </button>
                            <form action="{{ route('excluir.Prod', ['id' => $prod->id]) }}" method="POST" id="deleteForm{{$prod->id}}">
                                @csrf
                                @method('DELETE')
                                <button class=" bg-red-400  w-16 h-16 rounded-xl">
                                    <span class="material-symbols-outlined text-white text-3xl">delete</span>
                                </button>
                            </form>
                        </div>
                        <div id="{{$prod->id}}" class="edit.product hidden absolute left-0 top-0  bg-slate-500/80 w-screen h-full ">
                            <div class=" w-full h-full flex justify-center items-center">
                                <button id="exitCadProduct"  class="exit">
                                    <span class="material-symbols-outlined">close</span>
                                </button>
                                <div class="boxProd bg-white flex flex-col gap-4 p-5 rounded-2xl">
                                    <h1>Adicionar Produto</h1>
                                    @if ($errors->any())
                                    <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    @if(session('error'))
                                        <div class="alert alert-danger">
                                            {{ session('error') }}
                                        </div>
                                    @endif
                                    <form action="{{ route('edit.product', ['id' => $prod->id]) }}" enctype="multipart/form-data"  method="POST" class="grid grid-cols-2 gap-5">
                                        @csrf
                                        @method('PUT')
                                        <div class="nameProduct flex flex-col">
                                            <span class="text-base text-slate-400">Nome</span>
                                            <input type="text" name="nameProd" id="nameProduct"  class="rounded-xl" value="{{$prod->nameProd}}">
                                        </div>
                                        <div class="descriptonProduct flex flex-col ">
                                            <span class="text-base text-slate-400">Descriçao</span>
                                            <input type="text"   name="descriProd" id="descriptonProduct"  class="rounded-xl" value="{{$prod->descriProd}}">
                                        </div>
                                        <div class="categorieProduct flex flex-col ">
                                            <label for="categorie" class="block mb-2 text-base text-slate-400 ">Categoria</label>
                                            <select id="categorie" name="categoria_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                <option value="null">Escolha a categoria</option>
                                                @foreach ($listarCate as $categoria)
                                                <option data-id="{{$categoria->id}}" value="{{$categoria->id}}" @if ($categoria->id == $prod->categoria_id) selected @endif>{{$categoria->nome}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="descriptonProduct flex flex-col ">
                                            <span class="text-base text-slate-400">Fornecedor</span>
                                            <input type="text"  name="supplierProd" id="descriptonProduct"  class="rounded-xl" value="{{$prod->supplierProd}}">
                                        </div>
                                        <div class="amountProduct flex flex-col ">
                                            <span class="text-base text-slate-400">Quantidade</span>
                                            <input type="number" name="amountProd" class="rounded-xl" id="amountProduct" value="{{$prod->amountProd}}">
                                        </div>
                                        <div class="priceProduct flex flex-col ">
                                            <span class="text-base text-slate-400">valorDelivery</span>
                                            <input type="text"  name="unitPriceProd" id="priceProduct"  class="rounded-xl" value="{{$prod->unitPriceProd}}">
                                        </div>
                                        <div class="imageProduct flex flex-col ">
                                            <span class="text-base text-slate-400">image</span>
                                            <input type="file" name="imageProd" id="imageProd"  class="rounded-xl">
                                        </div>
                                        <input type="submit" value="Editar" class="bg-lime-500 p-2 rounded-xl col-span-1  cursor-pointer">
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                @endforeach
                


            </div>

            <div class="addProduct hidden">
                <div class=" absolute left-0 top-0 flex justify-center items-center  bg-slate-500/80 w-screen h-full ">
                    <button id="exitCadProduct"  class="exit">
                        <span class="material-symbols-outlined">close</span>
                    </button>
                    <div class="boxProd bg-white flex flex-col gap-4 p-5 rounded-2xl">
                        <h1>Adicionar Produto</h1>
                        @if ($errors->any())
                        <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        @if(session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif
                        <form action="{{route('cad.product')}}" enctype="multipart/form-data"  method="post" class="grid grid-cols-2 gap-5">
                            @csrf
                            <div class="nameProduct flex flex-col">
                                <span class="text-base text-slate-400">Nome</span>
                                <input type="text" name="nameProd" id="nameProduct"  class="rounded-xl">
                            </div>
                            <div class="descriptonProduct flex flex-col ">
                                <span class="text-base text-slate-400">Descriçao</span>
                                <input type="text" name="descriProd" id="descriptonProduct"  class="rounded-xl">
                            </div>
                            <div class="categorieProduct flex flex-col ">
                                <label for="categorie" class="block mb-2 text-base text-slate-400 ">Categoria</label>
                                <select id="categorie" name="categoria_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option value="null">Escolha a categoria</option>
                                    @foreach ($listarCate as $categoria)
                                        <option data-id="{{$categoria->id}}" value="{{$categoria->id}}">{{$categoria->nome}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="descriptonProduct flex flex-col ">
                                <span class="text-base text-slate-400">Fornecedor</span>
                                <input type="text" name="supplierProd" id="descriptonProduct"  class="rounded-xl">
                            </div>
                            <div class="amountProduct flex flex-col ">
                                <span class="text-base text-slate-400">Quantidade</span>
                                <input type="number" name="amountProd" id="amountProduct"  class="rounded-xl">
                            </div>
                            <div class="priceProduct flex flex-col ">
                                <span class="text-base text-slate-400">valorDelivery</span>
                                <input type="text" name="unitPriceProd" id="priceProduct"  class="rounded-xl">
                            </div>
                            <div class="imageProduct flex flex-col ">
                                <span class="text-base text-slate-400">image</span>
                                <input type="file" name="imageProd" id="imageProd"  class="rounded-xl">
                            </div>
                            <input type="submit" value="Adicionar" class="bg-lime-500 p-2 rounded-xl col-span-1  cursor-pointer">
                        </form>
                    </div>
                </div>
            </div>
            <div class="tagCategories hidden">
                <div class=" absolute left-0 top-0 flex justify-center items-center  bg-slate-500/80 w-screen h-full ">
                    <button id="exitTagCategories"  class="exit">
                        <span class="material-symbols-outlined">close</span>
                    </button>
                    <div class="boxCate bg-white flex flex-col gap-4 p-5 rounded-2xl">
                        <h1 class="font-semibold text-xl text-fuchsia-700 flex justify-center items-center gap-3"><span class="material-symbols-outlined">sell</span>Adicionar categorias</h1>
                        <form action="{{route('cad.categorie')}}" method="post" class="grid grid-cols-4 gap-5">
                            @csrf
                            <div class="nameasdCategorie flex flex-col col-span-3">
                                <span class="text-base text-slate-400">Nome</span>
                                <input type="text" name="nome" id="nome"  class="rounded-xl">
                            </div>
                            <input type="submit" value="Adicionar" class="bg-lime-500 p-2 rounded-xl col-span-1  cursor-pointer">
                        </form>
                        <div class="categoriesRegs">
                            <h1>categorias</h1>
                            <div class=" flex flex-col gap-4 overflow-y-auto h-96 p-2">
                                @foreach ($listarCate as $categoria)
                                    <div id="{{$categoria->id}}" class="cate flex justify-between items-center">
                                        <p class="text-xl">{{$categoria->nome}}</p>
                                        <form action="{{ route('excluir.categorie', ['id' => $categoria->id]) }}" method="POST" id="deleteForm{{$categoria->id}}">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="bg-red-400 p-2 flex justify-center items-center rounded-xl col-span-1 cursor-pointer delete-button" data-id="{{$categoria->id}}"><span class="material-symbols-outlined">delete</span></button>
                                        </form>

                                    </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
  </section>

@endsection

