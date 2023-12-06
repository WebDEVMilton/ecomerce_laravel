<?php

namespace App\Http\Controllers\Admin\localization;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CurrencyRateController extends Controller
{
    function currency(){
        return view("Admin.localization.currency");
    }
}
