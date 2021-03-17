<?php

namespace App\Http\Controllers\My;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProductOrders;
use App\Models\My\userMeasurement;

use Stripe;
use Session;

class paymentController extends Controller
{
    public function index(Request $request)
    {
      $allData = json_decode($request->allData);
        $r = [];
        $r['name'] = $request->name;
        $r['phno'] = $request->phno;
        $r['pcode'] = $request->pcode;
        $r['city'] = $request->city;
        $r['address'] = $request->address;
        $r['email'] = $request->email;
        $r['location'] = $request->location;
        $r['price'] = $request->price;
        $r['product_id'] = $allData[0]->product_id;
        $r['Neck'] = $allData[0]->Neck;
        $r['Shoulder'] = $allData[0]->Shoulder;
        $r['X_front'] = $allData[0]->X_front;
        $r['Bust'] = $allData[0]->Bust;
        $r['Under_bust'] = $allData[0]->Under_bust;
        $r['Waist'] = $allData[0]->Waist;
        $r['Lower_waist']  = $allData[0]->Lower_waist;
        $r['Hip']  = $allData[0]->Hip;
        $r['Arm_hole']  = $allData[0]->Arm_hole;
        $r['Muscle'] = $allData[0]->Muscle;
        $r['SLV_full_length'] = $allData[0]->SLV_full_length;
        $r['Elbow'] = $allData[0]->Elbow;
        $r['Cuff']  = $allData[0]->Cuff;
        $r['Thigh'] = $allData[0]->Thigh;
        $r['Knee'] = $allData[0]->Knee;
        $r['Calf'] = $allData[0]->Calf;
        $r['Ankle_hem'] = $allData[0]->Ankle_hem;
        $r['total'] = $request->total;

        return view('payment')->with('data',$r);
    }
  
    public function makePayment(Request $request)
    {
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        $allData = json_decode($request->allData);
        Stripe\Charge::create ([
                "amount" => $allData->price * 100,
                "currency" => "inr",
                "source" => $request->stripeToken,
                "description" => "Make payment and chill." 
        ]);
  
        Session::flash('success', 'Payment successfully made.');
        return $this->PlaceOrder($allData);
    }

    public function PlaceOrder($allData){

        // $check = $allData->name;

        // echo $check;
       
        $data = new ProductOrders();
        $data->user_id = $allData->product_id; //optional
        $data->billing_email = $allData->email;
        $data->billing_name =  $allData->name;
        $data->billing_address = $allData->address;
        $data->billing_city = $allData->city;
        $data->billing_postalcode = $allData->pcode;
        $data->billing_phone = $allData->phno;
        $data->billing_discount = '121'; // optional 
        $data->billing_discountcode = '121';  //optional
        $data->billing_subtotal = '121'; // optional
        $data->billing_tax = '121'; //optional
        $data->billing_total = $allData->price;
        $data->payment_gateway = 'stripe';
        $data->shipped = 'false';
        $data->error = 'no';
        $data->created_at = date("Y-m-d");
        $data->updated_at = date("Y-m-d");
        // $this->send_email();
        $data->save();

        
        $data2 = new userMeasurement();
        $data2->user_id = $allData->product_id;; //optional
        $data2->Neck = $allData->Neck;
        $data2->Shoulder = $allData->Shoulder;
        $data2->X_front = $allData->X_front;
        $data2->Bust = $allData->Bust;
        $data2->Under_bust = $allData->Under_bust;
        $data2->Waist= $allData->Waist;
        $data2->Lower_waist = $allData->Lower_waist;
        $data2->Hip = $allData->Hip;
        $data2->Arm_hole = $allData->Arm_hole;
        $data2->Muscle = $allData->Muscle;
        $data2->SLV_full_length= $allData->SLV_full_length;
        $data2->Elbow = $allData->Elbow;
        $data2->Cuff  = $allData->Cuff;
        $data2->Thigh = $allData->Thigh;
        $data2->Knee = $allData->Knee;
        $data2->Calf = $allData->Calf;
        $data2->Ankle_hem = $allData->Ankle_hem;
        $data2->save();

    
        
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= 'From: name' . "\r\n";
        $subject = "HTML email";
        $to = $allData->email;
            $msg=`<!DOCTYPE html>
            <html>
            
            <head>
                <title>Email</title>
             
            </head>
            
            <body>
            <h1>Hello</h1>
            </body>
            
            </html>`;
    
    
        //   $msg = "Name :- $fname\nLastname:- '$lname'\n Email:-'$email'\nTelephone:-'$tel'\nMessage:- '$message'";
           
            $msg = wordwrap($msg,70000);
            mail($to,$subject,$msg,$headers);
            // mail("webcodiceteam@gmail.com","Nz WaterBlasting Enquiry ",$headers,$msg);
            // mail("sajansharmaok@gmail.com","My subject",$msg,$header);
    
             
        if($data->id){
            return redirect()->route('thanksPage',['id'=>$data->id]);
        }
    
        }

    
}