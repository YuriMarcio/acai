<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashEstoqueController extends Controller
{
    public function estoque(){
        return view('dashboard.pagesdash.dashEstoque');
    }
}
