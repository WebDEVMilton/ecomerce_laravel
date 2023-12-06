<?php

namespace App\Http\Controllers\Admin\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserlistController extends Controller
{
    function userlist(){
        return view("Admin.users.userlist");
    }
}
