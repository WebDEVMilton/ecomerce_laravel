<?php

namespace App\Http\Controllers\Admin\orders;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderlistController extends Controller
{
    function orderlist(){
        return view("Admin.orders.orderlist");
    }
}
