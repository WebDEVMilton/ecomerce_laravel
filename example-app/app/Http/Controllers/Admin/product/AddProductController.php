<?php

namespace App\Http\Controllers\Admin\product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin\Addcategory;
use App\Models\admin\Addsubcatgeory;
use App\Models\admin\Addproduct;

class AddProductController extends Controller
{
    function Addproduct(){
        $catdata=Addcategory::all();
        $subcatdata=Addsubcatgeory::all();

        return view("Admin.product.addProduct",['catdata'=>$catdata,'subcatdata'=>$subcatdata]);
    }

    function Addproductdata(Request $request){
        $request->validate([
            'pname'=>'required',
            'cat_id'=>'required',
            'subcat_id'=>'required',
            'tags'=>'required',
            'exchange'=>'required',
            'refund'=>'required',
            'pimage'=>'required',
            'ptumbnail'=>'required',
            'pvideo'=>'required',
            'shipweight'=>'required',
            'price'=>'required',
            'stock'=>'required',
            'quantity'=>'required',
            'pagetitle'=>'required',
            'metadesc'=>'required',
            'meta_url'=>'required',

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

        $product=new Addproduct();
        $product->pname=$request->pname;
        $product->cat_id=$request->cat_id;
        $product->subcat_id=$request->subcat_id;
        $product->tags=$request->tags;
        $product->exchange=$request->exchange;
        $product->refund=$request->refund;
        $product->pimage=$request->pimage;
        $product->ptumbnail=$request->ptumbnail;
        $product->pvideo=$request->pvideo;
        $product->shipweight=$request->shipweight;
        $product->price=$request->price;
        $product->stock=$request->stock;
        $product->quantity=$request->quantity;
        $product->pagetitle=$request->pagetitle;
        $product->metadesc=$request->metadesc;
        $product->meta_url=$request->meta_url;
        $product->save();

        
        
    }



}
