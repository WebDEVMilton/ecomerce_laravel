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



    // // Admin
    // function dashboard(){
    //     return view("Admin.dashboard.index");
    // }
    // function Addproduct(){
    //     return view("Admin.product.addProduct");
    // }
    // function productlist(){
    //     return view("Admin.product.productlist");
    // }
    // function Addcategory(){
    //     return view("Admin.category.addCategory");
    // }
    // function categorytlist(){
    //     return view("Admin.category.categorylist");
    // }
    // function Addattribute(){
    //     return view("Admin.Attribute.Addattribute");
    // }
    // function attributetlist(){
    //     return view("Admin.Attribute.attributelist");
    // }
    // function Adduser(){
    //     return view("Admin.users.Adduser");
    // }
    // function userlist(){
    //     return view("Admin.users.userlist");
    // }
    // function Addrole(){
    //     return view("Admin.Roles.Addrole");
    // }
    // function rolelist(){
    //     return view("Admin.Roles.rolelist");
    // }
    // function media(){
    //     return view("Admin.media.media");
    // }


    // function orderdetail(){
    //     return view("Admin.orders.orderdetail");
    // }
    // function orderlist(){
    //     return view("Admin.orders.orderlist");
    // }
    // function ordertracking(){
    //     return view("Admin.orders.orderTracking");
    // }

    // function currency(){
    //     return view("Admin.localization.currency");
    // }
    // function translation(){
    //     return view("Admin.localization.translation");
    // }
    
    // function couponlist(){
    //     return view("Admin.coupons.couponlist");
    // }
    // function createcoupon(){
    //     return view("Admin.coupons.createCoupon");
    // }
    // function tax(){
    //     return view("Admin.tax.tax");
    // }

    // function review(){
    //     return view("Admin.review.productReview");
    // }
    // function profileSetting(){
    //     return view("Admin.profile_setting.profileSetting");
    // }
    // function report(){
    //     return view("Admin.reports.report");
    // }
    // function list(){
    //     return view("Admin.list.list");
    // }
    // function support(){
    //     return view("Admin.support.supportTicket");
    // }

}
