<?php

namespace App\Http\Controllers\Admin\orders;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderDetailController extends Controller
{
    function orderdetail(){
        return view("Admin.orders.orderdetail");
    }
}
