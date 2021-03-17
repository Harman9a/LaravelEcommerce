<?php

namespace App\Http\Controllers\My;

use App\Http\Controllers\Controller;
use App\Models\Products;
use Illuminate\Http\Request;

class UserProducts extends Controller
{
    function main() {
        $products = Products::all();
        return view('products')->with('products', $products);
    }

    function viewsingleproduct(){

        return 'ok';

    }
}