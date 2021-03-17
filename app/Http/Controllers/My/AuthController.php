<?php

namespace App\Http\Controllers\My;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\My\Users;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $res){
        $pass = Hash::make($res->password);
        $data = Users::where('email',$res->email)->where('password',$pass)->get();
        return $pass;
        // $cookie_name = "demo";
        // $cookie_value = $res->uname;
        // setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
        // return redirect()->back();
    }
}


// $2y$10$rO3tv5h4o4PVe/jvdvsJ3esHTs/x6nS7osiqc./blNC6gbWSswPYC