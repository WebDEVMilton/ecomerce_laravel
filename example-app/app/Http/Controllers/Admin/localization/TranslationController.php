<?php

namespace App\Http\Controllers\Admin\localization;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TranslationController extends Controller
{
    function translation(){
        return view("Admin.localization.translation");
    }
}
