<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Courses as ModelsCourses;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

use Illuminate\Support\Facades\Session;

class Courses extends Controller
{
    
    function loadCoursesPage() {
       
        $getcourses = ModelsCourses::get();

        return view("courses", ['courses' => $getcourses]);

    }
    //
}