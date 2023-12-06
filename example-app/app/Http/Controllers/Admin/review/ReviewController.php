<?php

namespace App\Http\Controllers\Admin\review;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    function review(){
        return view("Admin.review.productReview");
    }
}
