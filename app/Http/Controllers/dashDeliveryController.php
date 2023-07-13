<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashDeliveryController extends Controller
{
    public function delivery(){
        return view('dashboard.pagesdash.dashDelivery');
    }
}
