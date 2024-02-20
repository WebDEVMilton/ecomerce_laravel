<?php

namespace App\Http\Controllers\User\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Session;
use Redirect;

class UserLoginController extends Controller
{
    function loginpage(){
        return view('user.Auth.login');
    }


    function userlogin(Request $request){
        $request->validate([
            'email'=>'required',
            'password'=>'required',
        ]);
        if(Auth::guard('web')->attempt(['email'=>$request->email,'password'=>$request->password])){
            
            $userinfo=Auth::guard('web')->user();

            return redirect(url('/user/user-dashboard',["id"=>$userinfo->id,"name"=>$userinfo->name]));


        }else{
            Session::flush('err','invalid Credential');
            return redirect()->back();
        }
    }
    public function logout(){
        Auth::guard('web')->logout();
        Session::flush();
        Redirect::back();
        return redirect('/user-login');
    }
}
