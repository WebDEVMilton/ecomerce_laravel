<?php

namespace App\Http\Controllers\Admin\coupon;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CouponlistController extends Controller
{ 
    function couponlist(){
        return view("Admin.coupons.couponlist");
    }
}
