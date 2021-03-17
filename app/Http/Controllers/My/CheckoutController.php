<?php

namespace App\Http\Controllers\My;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    function index(){
        return view('checkout');
    }

    function cartCheckout(Request $res){
        return $res->price;
    }
}