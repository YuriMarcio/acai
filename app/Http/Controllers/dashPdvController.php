<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashPdvController extends Controller
{
    public function pdv(){
        return view('dashboard.pagesdash.dashPdv');
    }
}
