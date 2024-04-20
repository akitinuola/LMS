<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

use Illuminate\Support\Facades\Session;

class Login extends Controller
{
    function returnLoginpage() {
        Session::remove('id');
        Session::remove('email');
        Session::remove('firstname');
        
    
        
        return view("login");
    }


    function login(Request $request)
    {

        // return $request;

        $request->validate([
            "email" => "email:rfc",
            "password" => "required|min:8 ",
            
        ]);


        $checkemail = User::where("email",$request->email)->first();
        if($checkemail==""){
            return Redirect::back()->withErrors(["email doesnt exists"]);
        }

        if(!Hash::check($request->password, $checkemail->password)){
            return Redirect::back()->withErrors (["incorrect password"]);
        }
        Session::put('id',$checkemail->id);
        Session::put('email',$checkemail->email);
        Session::put('firstname',$checkemail->firstname);
        return redirect("/home");

    }
}
