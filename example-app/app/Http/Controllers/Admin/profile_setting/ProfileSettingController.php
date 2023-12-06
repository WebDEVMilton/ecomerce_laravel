<?php

namespace App\Http\Controllers\Admin\profile_setting;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileSettingController extends Controller
{
    function profileSetting(){
        return view("Admin.profile_setting.profileSetting");
    }
}
