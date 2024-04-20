<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Courses as ModelsCourses;
use App\Models\Announcements as ModelsAnnouncement;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

use Illuminate\Support\Facades\Session;

class Home extends Controller
{
    
    function loadHomePage() {
       
        $getcourses = ModelsCourses::get()->slice(-3);
        $getannouncement = ModelsAnnouncement::get()->slice(-3);

        return view("home", ['courses' => $getcourses, 'announcements' => $getannouncement, ]);

        
       
        
    }
    //
}