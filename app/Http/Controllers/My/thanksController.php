<?php

namespace App\Http\Controllers\My;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class thanksController extends Controller
{
    public function index($id) {
        return view('thankyou');
    }
}
