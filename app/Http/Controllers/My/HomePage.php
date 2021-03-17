<?php

namespace App\Http\Controllers\My;

use App\Http\Controllers\Controller;
use App\Models\Products;
use Illuminate\Http\Request;

class HomePage extends Controller
{
    function main() {
        $products = Products::where('feature','1')->take(4)->inRandomOrder()->get();
        return view('welcome')->with('products', $products);
    }
}
