<?php

namespace App\Http\Controllers\Admin\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdduserController extends Controller
{
    function Adduser(){
        return view("Admin.users.Adduser");
    }
}
