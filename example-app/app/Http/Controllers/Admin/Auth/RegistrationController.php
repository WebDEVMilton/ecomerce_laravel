<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AdminReg;
use Hash;
// use Auth;
// use Session;


class RegistrationController extends Controller
{
    function Adminregister(){
        return view('Admin.Auth.register');
    }

    function regSubmit(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'password'=>'required',
            'usertype'=>'required'

        ]);

        $registration= new AdminReg();
        $registration->name=$request->name;
        $registration->email=$request->email;
        $registration->password=Hash::make($request->password);
        $registration->usertype=$request->usertype;
        $registration->save();

        return response()->json([
            'status'=>'success'
            
        ]);
    }


}
