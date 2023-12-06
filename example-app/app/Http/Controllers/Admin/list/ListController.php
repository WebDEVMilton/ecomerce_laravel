<?php

namespace App\Http\Controllers\Admin\list;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ListController extends Controller
{
    function list(){
        return view("Admin.list.list");
    }
}
