<?php

namespace App\Http\Controllers\My;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class measurementController extends Controller
{
    function index(){
        return view('measurement');
    }
}