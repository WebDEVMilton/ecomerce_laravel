<?php

namespace App\Http\Controllers\Admin\report;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    function report(){
        return view("Admin.reports.report");
    }
}
