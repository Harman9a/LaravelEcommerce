<?php

namespace App\Http\Controllers\My;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\cart;
use App\Models\My\Users;
use App\Models\Products;

class orignalCartController extends Controller
{
    function index(Request  $demo) {

        // $a = [];
        // $a['Neck'] = $demo->i1;
        // $a['Shoulder'] = $demo->i2;
        // $a['X_front'] = $demo->i3;
        // $a['Bust'] = $demo->i4;
        // $a['Under_bust'] = $demo->i5;
        // $a['Waist'] = $demo->i6;
        // $a['Lower_waist'] = $demo->i7;
        // $a['Hip'] = $demo->i8;
        // $a['Arm_hole'] = $demo->i9;
        // $a['Muscle'] = $demo->i10;
        // $a['SLV_full_length'] = $demo->i11;
        // $a['Elbow'] = $demo->i12;
        // $a['Cuff'] = $demo->i13;
        // $a['Thigh'] = $demo->i14;
        // $a['Knee'] = $demo->i15;
        // $a['Calf'] = $demo->i16;
        // $a['Ankle hem'] = $demo->i17;

    


       

        $user = Users::where('remember_token','dF2nJOfuBlH7tsUn8EYARHl49RvOlhLvtXRIbodKqy1EDfF3hfG4xC7WCL1T')->first();
        $user = $user->name;
        $data = cart::where('user_id',$_COOKIE['r_u'])->get();
        foreach($data as $r) {
            $r->name = $user;
        }
        foreach($data as $r){

            
            $product = Products::where('id',$r->product_id)->first();
            $product_name = $product->name;
            $product_id = $product->id;
            $product_price = $product->price;
            $product_image = $product->image;
            if($r->product_id == $product_id){
                $r->product_name = $product_name;
                $r->product_price = $product_price;
                $r->product_image = $product_image;
                $r->Neck = $demo->i1;
                $r->Shoulder = $demo->i2;
                $r->X_front = $demo->i3;
                $r->Bust = $demo->i4;
                $r->Under_bust = $demo->i5;
                $r->Waist= $demo->i6;
                $r->Lower_waist = $demo->i7;
                $r->Hip = $demo->i8;
                $r->Arm_hole = $demo->i9;
                $r->Muscle = $demo->i10;
                $r->SLV_full_length= $demo->i11;
                $r->Elbow = $demo->i12;
                $r->Cuff  = $demo->i13;
                $r->Thigh = $demo->i14;
                $r->Knee = $demo->i15;
                $r->Calf = $demo->i16;
                $r->Ankle_hem = $demo->i17;
            }
        }
        return view('Cart')->with('data', $data);
    }
    function addProductFun(Request $res){
        $data = cart::where('user_id',$_COOKIE['r_u'])->where('product_id',$res->product_id)->get();
        if(count($data) == 0){
    		$data = new cart();
    		$data->user_id = $_COOKIE['r_u'];
    		$data->product_id = $res->product_id;
    		$data->quantity = 1;
    		$data->save();
        }else{
            $sum = 0;
            foreach($data as $r) {
                $sum = $r->quantity + 1;
            }
            $data = cart::where('user_id',$_COOKIE['r_u'])->where('product_id',$res->product_id)->update([
                'quantity' => $sum
            ]);
        }
        return $data;
    }
}