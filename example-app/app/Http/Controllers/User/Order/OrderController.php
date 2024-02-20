<?php

namespace App\Http\Controllers\User\Order;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
class OrderController extends Controller
{
    function addcart(Request $request){

        $request->validate([
            'product_id'=>'required|unique:orders',
            'price'=>'required'
        ]);
        $addcart=new Order();
        $addcart->ipadress = $request->getClientIp();
        $addcart->product_id=$request->product_id;
        $addcart->price=$request->price;
        $addcart->quantity=1;
        $addcart->save();
        
    }

    // function getQuantity(){
    //     $getQuantity=Order::all();
        
    // }

    function updateQuantity(Request $request){

        Order::where('product_id',$request->product_id)->update([

            'quantity'=>$request->quantity
        ]);


    }

    // function cartBar(){

    // };

}
