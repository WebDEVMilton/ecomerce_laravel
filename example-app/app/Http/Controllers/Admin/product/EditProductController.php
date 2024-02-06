<?php

namespace App\Http\Controllers\Admin\product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin\Addcategory;
use App\Models\admin\Addsubcatgeory;
use App\Models\admin\Addproduct;

class EditProductController extends Controller
{
    public function editproduct($id){

        $product=Addproduct::with('subcategory')->where('id',$id)->get();

        // $getsubcategory

        return view("Admin.product.editProduct",['product'=>$product]);
    }

    public function updateproduct(Request $request){

        $request->validate([
            'ptumbnail'=>'mimes:jpg,png,jpeg,gif,svg',
            'pimage.*' => 'mimes:jpg,png,jpeg,gif,svg'


        ]);
        if($request->TotalImages > 0)
        {
               
           for ($x = 0; $x < $request->TotalImages; $x++) 
           {

               if ($request->hasFile('pimage'.$x)) 
                {
                    $file= $request->file('pimage'.$x);

                    $pimage = $file->move('public/Admin/images');
                    $pimage= $file->getClientOriginalName();

                    //$insert[$x]['name'] = $name;
                    $insert[$x]['pimage'] = $pimage;
                }
           }
        }

        Addproduct::where('id',$request->id)->update([
            'pname'=>$request->pname,
            'cat_id'=>$request->cat_id,
            'subcat_id'=>$request->subcat_id,
            'tags'=>$request->tags,
            'exchange'=>$request->exchange,
            'refund'=>$request->refund,
            'pimage'=>$request->pimage,
            'ptumbnail'=>$request->ptumbnail,
            'pvideo'=>$request->pvideo,
            'shipweight'=>$request->shipweight,
            'price'=>$request->price,
            'stock'=>$request->stock,
            'quantity'=>$request->quantity,
            'pagetitle'=>$request->pagetitle,
            'metadesc'=>$request->metadesc,
            'meta_url'=>$request->meta_url,
            

        ]);

        return response()->json([
            'status'=>'success'
        ]);


        
    }
}
