@extends('../dashboard/logged')
@extends('base')

@section('title')
PDV
@endsection
@section('basedash')
    <div class="estoque w-full h-full flex justify-center items-center flex-col ">
        <img src="{{ asset('img/gif/construction.gif') }}" class="" alt="Imagem">
        <div class="flex flex-row-reverse justify-center items-center gap-2">
            <span class="material-symbols-outlined text-purple-400">handyman</span>
            <h1 class="text-2xl font-semibold ">Pagina em construção</h1>
        </div>
    </div>
@endsection

