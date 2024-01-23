<?php

namespace App\Http\Controllers\Admin\product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin\Addcategory;
use App\Models\admin\Addsubcatgeory;
use App\Models\admin\Addproduct;

class ProductlistController extends Controller
{
    function productlist(){

        $product=Addproduct::with('subcategory')->get();
        // $productcat=Addproduct::with('category')->get();

        // $productcategory=Addproduct::with('category')->get();
        // $category=Addsubcatgeory::with('category')->get();

        // $category=Addcategory::with('subcategory','product')->get();
        // $category=Addcategory::with('subcategory')->get();

    
        return view("Admin.product.productlist",['product'=>$product]);
    }



    public function deleteProduct($id){
        Addproduct::find($id)->delete();
        return redirect()->back();


    }






}
