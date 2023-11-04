<?php

namespace App\Http\Controllers;

use App\Models\produto;
use Illuminate\Http\Request;
use Psy\CodeCleaner\FunctionContextPass;

class MobileDelivery extends Controller
{
    public function productDetails($id){
        $Produto = produto::find($id);
        $produtoCopo = Produto::whereHas('categoria', function($query){
            $query->where('nome','copo');
        })->get();
        $produtoAcompanhameto = Produto::whereHas('categoria', function($query){
            $query->where('nome','acompanhamento');
        })->get();
        $produtoCalda = Produto::whereHas('categoria', function($query){
            $query->where('nome','creme');
        })->get();
        return view("deliveryMobile.productDetails",['produto'=>$Produto,'copo'=>$produtoCopo,'acompanhamento'=>$produtoAcompanhameto,'creme'=>$produtoCalda]);
    }
}
