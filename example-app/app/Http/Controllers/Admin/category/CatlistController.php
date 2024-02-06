<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin\Addcategory;
use App\Models\admin\Addsubcatgeory;

class CatlistController extends Controller
{
    function categorytlist(){

        $getcategory=Addsubcatgeory::with('category')->get();

        return view("Admin.category.categorylist",['getcategory'=>$getcategory]);
    }



    // public function deletecategory($id)
    // {
    //     Addsubcatgeory::find($id)->delete();

    //     return response()->json(['success' => 'User Deleted Successfully!']);
    // }
    public function deletecategory(Request $request){
        Addsubcatgeory::find($request->id)->delete();
        // return redirect()->back();
    }


}
