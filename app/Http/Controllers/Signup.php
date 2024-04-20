<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;  

class Signup extends Controller
{
    //


   

    function registerUser(Request $request)
    {

        // return $request;

        $request->validate( [
            "email" => "email:rfc,dns",
            "password" => "required|min:8 ",
            "firstname" => "required",
            "lastname" => "required",
        ]);


        $checkemail = User::where("email",$request->email)->first();
        if($checkemail!=""){
            return Redirect::back()->withErrors(["email already exists"]);
        }

     

        if($request->password!=$request->password_confirmation){
            return Redirect::back()->withErrors (["passwords dont match"]);
        }

        User::create([
            "email" => $request->email,
            "password" => Hash::make($request->password),
            "firstname" => $request->firstname,
            "lastname" => $request->lastname,
            
        ]);
        $checkemail = User::where("email",$request->email)->first();

        Session::put('id',$checkemail->id);
        Session::put('firstname',$checkemail->firstname);
        Session::put('email',$checkemail->email);
    

        return redirect("/home"); #redirect changes the url wheraas view just loads the view and doesnt change the url

        
    }

 
//     function returnRegisterPage()
//     {
//         $users = User::all();
//         $users = User::all();
//         return view("register", compact("users"));
//     }
}
