<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Lecturers as ModelsLecturers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

use Illuminate\Support\Facades\Session;

class Lecturers extends Controller
{
    
    function loadLecturersPage() {
       
        $getlecturer = ModelsLecturers::get();

        return view("lecturers", ['lecturers' => $getlecturer]);

    }
    //
}
