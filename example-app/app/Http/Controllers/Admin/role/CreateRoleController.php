<?php

namespace App\Http\Controllers\Admin\Role;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CreateRoleController extends Controller
{
    function Addrole(){
        return view("Admin.Roles.Addrole");
    }
}
