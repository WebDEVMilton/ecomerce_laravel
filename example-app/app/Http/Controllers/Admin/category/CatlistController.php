<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CatlistController extends Controller
{
    function categorytlist(){
        return view("Admin.category.categorylist");
    }
}
