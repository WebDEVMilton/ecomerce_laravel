<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Models\admin\Addcategory;
use App\Models\admin\Addsubcatgeory;
use Illuminate\Http\Request;

class AddcatController extends Controller
{
    function Addcategory(){

        $data=Addcategory::all();


        return view("Admin.category.addCategory",['data'=>$data]);
    }

    function Addparentcategory(Request $request){
        $request->validate([

            'catname'=>'required'

        ]);

        $category=new Addcategory();
        $category->catname=$request->catname;
        $category->save();

    }


    
    function Addsubcategory(Request $request){

        $request->validate([

           'addcat_id'=>'required',
           'subcatname'=>'required'
        ]);
        $subcatgory=new Addsubcatgeory();
        $subcatgory->addcat_id=$request->addcat_id;
        $subcatgory->subcatname=$request->subcatname;
        $subcatgory->save();
        return response()->json([
            'status'=>'success'
        ]);


    }




}
