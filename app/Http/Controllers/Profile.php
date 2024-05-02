<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

use Illuminate\Support\Facades\Session;

class Profile extends Controller
{
    
    function loadProfilePage() {
       
        $getuser = User::where('email', session('email'))->first();

        return view("profile", ['user' => $getuser]);

    }
    //

    function updateprofile(Request $request) {

        $request->validate( [
            "email" => "required|email:rfc,dns",
            "firstname" => "required",
            "lastname" => "required",
        ]);


        $checkemail = User::where("email",$request->email)->whereNot('id', session('id'))->first();
        if($checkemail!=""){
            return Redirect::back()->withErrors(["email already exists"]);
        }


        $getuser = User::where('id', session('id'))->first();

       

        $getuser->firstName = $request->firstname;
        $getuser->lastName= $request->lastname;
        $getuser->email = $request->email;
      

        $getuser->save();

        return redirect("/profile");
    }
}
