<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    function index(){
        return view("user.index");
    }
    function shop_category(){
        return view("user.shop_category");
    }
    function shop_left_sidebar(){
        return view("user.shop_left_sidebar");
    }
    function product_left_thumbnail(){
        return view("user.product_left_thumbnail");
    }
    function blog_detail(){
        return view("user.blog_detail");
    }
    function blog_list(){
        return view("user.blog_list");
    }
    function error_page(){
        return view("user.404_page");
    }
    function cart(){
        return view("user.cart");
    }
    function contact(){
        return view("user.contact");
    }
    function checkout(){
        return view("user.checkout");
    }
    function coming_soon(){
        return view("user.coming_soon");
    }


}
