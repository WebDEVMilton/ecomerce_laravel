<?php

namespace App\Http\Controllers\User\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Hash;

class SignupController extends Controller
{
    function signPage(){

        return view('user.Auth.signup');
    }
    function userSubmit(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'password'=>'required',

        ]);

        $registration= new User();
        $registration->name=$request->name;
        $registration->email=$request->email;
        $registration->password=Hash::make($request->password);
        $registration->save();

        return redirect('/user-login');
    }
}
