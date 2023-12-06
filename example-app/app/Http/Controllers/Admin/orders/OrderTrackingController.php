<?php

namespace App\Http\Controllers\Admin\orders;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderTrackingController extends Controller
{
    function ordertracking(){
        return view("Admin.orders.orderTracking");
    }
}
