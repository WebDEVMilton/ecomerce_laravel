<?php

namespace App\Http\Controllers\Admin\Role;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RolelistController extends Controller
{
    function rolelist(){
        return view("Admin.Roles.rolelist");
    }
}
