<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Grades as ModelGrades;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

use Illuminate\Support\Facades\Session;


class Grades extends Controller
{
    
    function loadGradePage() {
       
        $getgrades = ModelGrades::where('userId', session('id'))->get();
        return view("grades", ['grades' => $getgrades]);

    }

  
    //
    //
}
