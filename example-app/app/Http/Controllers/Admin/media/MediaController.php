<?php

namespace App\Http\Controllers\Admin\media;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MediaController extends Controller
{
    function media(){
        return view("Admin.media.media");
    }
}
