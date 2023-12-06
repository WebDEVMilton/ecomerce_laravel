<?php

namespace App\Http\Controllers\Admin\attribute;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AttributelistController extends Controller
{
    function attributetlist(){
        return view("Admin.Attribute.attributelist");
    }
}
