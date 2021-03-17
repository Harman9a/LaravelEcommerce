<?php

namespace App\Http\Controllers\My;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\cart;
use App\Models\My\Users;
use App\Models\Products;

class cartController extends Controller
{
    function index($url) {
        $data = Products::where('id',$url)->get();
        return view('single')->with('data', $data);
    }

    function addProductFun(Request $res){
		$data = new cart();
		$data->user_id = $_COOKIE['r_u'];
		$data->product_id = $res->product_id;
		$data->quantity = 1;
		$data->save();
        $data = Products::where('id',$url)->get();
        return view('single')->with('data', $data);
    }

    function delete_item(Request $res){
        $data = cart::where('id',$res->item_id)->delete();
        return $data;
    }
    function Update_item(Request $res){

        // $data = cart::where('id',$res->iteam_id);

      
    //    echo $res->item_id;
    //    echo $res->two;
    // $data = cart::where('id',$res->item_id)->get();
    // $data->quantity = $res->two;
    // $data->save();

    cart::where('id',$res->item_id)
       ->update([
           'quantity' => $res->two
        ]);

    // return $data;

    }
}