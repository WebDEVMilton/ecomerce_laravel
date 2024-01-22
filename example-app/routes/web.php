<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Public\SiteController;

// admin 
use App\Http\Controllers\Admin\category\AddcatController;
use App\Http\Controllers\Admin\category\CatlistController;
use App\Http\Controllers\Admin\dashboard\DashboardController;
use App\Http\Controllers\Admin\product\AddProductController;
use App\Http\Controllers\Admin\product\ProductlistController;
use App\Http\Controllers\Admin\product\EditProductController;
use App\Http\Controllers\Admin\attribute\AddattributeController;
use App\Http\Controllers\Admin\attribute\attributelistController;
use App\Http\Controllers\Admin\user\AdduserController;
use App\Http\Controllers\Admin\user\UserlistController;
use App\Http\Controllers\Admin\role\CreateRoleController;
use App\Http\Controllers\Admin\role\RolelistController;
use App\Http\Controllers\Admin\media\MediaController;
use App\Http\Controllers\Admin\orders\OrderDetailController;
use App\Http\Controllers\Admin\orders\OrderlistController;
use App\Http\Controllers\Admin\orders\OrderTrackingController;
use App\Http\Controllers\Admin\localization\CurrencyRateController;
use App\Http\Controllers\Admin\localization\TranslationController;
use App\Http\Controllers\Admin\coupon\CouponlistController;
use App\Http\Controllers\Admin\coupon\CreateCouponController;
use App\Http\Controllers\Admin\tax\TaxController;
use App\Http\Controllers\Admin\review\ReviewController;
use App\Http\Controllers\Admin\support\SupportController;
use App\Http\Controllers\Admin\profile_setting\ProfileSettingController;
use App\Http\Controllers\Admin\report\ReportController;
use App\Http\Controllers\Admin\list\ListController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get("/",[SiteController::class,"index"]);
Route::get("/Shop category sidebar",[SiteController::class,"shop_category"]);
Route::get("/shop_left_sidebar",[SiteController::class,"shop_left_sidebar"]);
Route::get("/product_left_thumbnail",[SiteController::class,"product_left_thumbnail"]);
Route::get("/blog_detail",[SiteController::class,"blog_detail"]);
Route::get("/blog_list",[SiteController::class,"blog_list"]);
Route::get("/404",[SiteController::class,"error_page"]);
Route::get("/cart",[SiteController::class,"cart"]);
Route::get("/contact",[SiteController::class,"contact"]);
Route::get("/checkout",[SiteController::class,"checkout"]);
Route::get("/coming_soon",[SiteController::class,"coming_soon"]);


// admin prefix 

Route::group(['prefix'=>'admin'],function(){
    Route::get("/dashboard",[DashboardController::class,"dashboard"]);

    // add category 
    Route::get("/addcategory",[AddcatController::class,"Addcategory"]);
    Route::get("/categorylist",[CatlistController::class,"categorytlist"]);
    // category submission 
    Route::post('/addparentcat',[AddcatController::class,"Addparentcategory"])->name('add.parentcat');
    Route::post('/addsubcat',[AddcatController::class,"Addsubcategory"])->name('add.subcat');


    // add product 
    Route::get("/addProduct",[AddProductController::class,"Addproduct"]);
    // Route::get("/updateProduct",[AddProductController::class,"getsubcategory"])->name('get.subcategory');
    Route::get("/productlist",[ProductlistController::class,"productlist"]);
    // product submission 
    Route::post("/addProductdata",[AddProductController::class,"Addproductdata"])->name('add.productdata');

    // update product 

    Route::get("/editproduct/{id}",[EditProductController::class,"editproduct"])->name('edit.product');

    Route::post("/updateproduct",[EditProductController::class,"updateproduct"])->name('update.product');

    // delete product 
    Route::delete("/deleteProduct/{id}",[ProductlistController::class,"deleteProduct"]);







    // 

    // 
    Route::get("/addattribute",[AddattributeController::class,"Addattribute"]);
    Route::get("/attributelist",[attributelistController::class,"attributetlist"]);
    //
    Route::get("/adduser",[AdduserController::class,"Adduser"]);
    Route::get("/userlist",[UserlistController::class,"userlist"]);
    //
    Route::get("/addrole",[CreateRoleController::class,"Addrole"]);
    Route::get("/rolelist",[RolelistController::class,"rolelist"]);
    //
    Route::get("/media",[MediaController::class,"media"]);
    //
    Route::get("/orderdetail",[OrderDetailController::class,"orderdetail"]);
    Route::get("/orderlist",[OrderlistController::class,"orderlist"]);
    Route::get("/ordertracking",[OrderTrackingController::class,"ordertracking"]);
    //
    Route::get("/currency",[CurrencyRateController::class,"currency"]);
    Route::get("/translation",[TranslationController::class,"translation"]);
    //
    Route::get("/couponlist",[CouponlistController::class,"couponlist"]);
    Route::get("/createcoupon",[CreateCouponController::class,"createCoupon"]);
    //
    Route::get("/tax",[TaxController::class,"tax"]);
    //
    Route::get("/review",[ReviewController::class,"review"]);
    //
    Route::get("/support",[SupportController::class,"support"]);
    //
    Route::get("/profileSetting",[ProfileSettingController::class,"profileSetting"]);
    //
    Route::get("/report",[ReportController::class,"report"]);
    //
    Route::get("/list",[ListController::class,"list"]);
});








