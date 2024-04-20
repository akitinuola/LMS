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
}
