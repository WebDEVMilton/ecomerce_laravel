<?php

namespace App\Http\Controllers\Admin\attribute;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AddattributeController extends Controller
{
    function Addattribute(){
        return view("Admin.Attribute.Addattribute");
    }
}
