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

        $product = Addproduct::with('subcategory')->latest()->paginate(3);
        // $productcat=Addproduct::with('category')->get();

        // $productcategory=Addproduct::with('category')->get();
        // $category=Addsubcatgeory::with('category')->get();

        // $category=Addcategory::with('subcategory','product')->get();
        // $category=Addcategory::with('subcategory')->get();
        // $product = Addproduct::latest()->paginate(3); 
    
        return view("Admin.product.productlist",['product'=>$product])->render();
    }



    // public function deleteProduct(Request $request){
    //     Addproduct::find($request->$id)->delete();
    //     // return redirect()->back();


    // }


    public function deleteProduct($id)
    {
        Addproduct::find($id)->delete();

         return response()->json(['success' => 'User Deleted Successfully!']);
    }


    function paginateProduct(){
        $product = Addproduct::with('subcategory')->latest()->paginate(3);

        return view("Admin.product.paginationProduct",['product'=>$product])->render();
    }




   //search product

    public function searchProduct(Request $request){
        $product = Addproduct::where('pname', 'like', '%'.$request->search_string.'%')
        ->orWhere('price', 'like', '%'.$request->search_string.'%')
        ->orderBy('id', 'desc')
        ->paginate(3);

        if($product->count() >=1){
            return view('Admin.product.paginationProduct', ['product'=>$product])->render();
        }else{
            return response()->json([
                'status'=>'nothing_found',
            ]);
        }
    }






}
