<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Session;
use Redirect;


class LoginController extends Controller
{
    function loginpage(){
        return view('Admin.Auth.login');
    }

    function login(Request $request){
        $request->validate([
            'email'=>'required',
            'password'=>'required',
        ]);
        if(Auth::guard('admin')->attempt(['email'=>$request->email,'password'=>$request->password])){
            return redirect('/admin/dashboard');
        }else{
            Session::flush('err','invalid Credential');
            return redirect()->back();
        }
    }
    public function logout(){
        Auth::guard('admin')->logout();
        Session::flush();
        Redirect::back();
        return redirect('/login');
    }

}
