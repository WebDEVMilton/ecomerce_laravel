<?php

namespace App\Http\Controllers\Admin\coupon;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CreateCouponController extends Controller
{
    function createcoupon(){
        return view("Admin.coupons.createCoupon");
    }
}
