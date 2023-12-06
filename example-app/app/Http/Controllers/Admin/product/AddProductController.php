<?php

namespace App\Http\Controllers\Admin\product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AddProductController extends Controller
{
    function Addproduct(){
        return view("Admin.product.addProduct");
    }
}
