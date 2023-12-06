<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AddcatController extends Controller
{
    function Addcategory(){
        return view("Admin.category.addCategory");
    }
}
