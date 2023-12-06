<?php

namespace App\Http\Controllers\Admin\tax;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TaxController extends Controller
{
    function tax(){
        return view("Admin.tax.tax");
    }
}
