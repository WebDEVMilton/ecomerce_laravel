<?php

namespace App\Http\Controllers\Admin\product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductlistController extends Controller
{
    function productlist(){
        return view("Admin.product.productlist");
    }
}
