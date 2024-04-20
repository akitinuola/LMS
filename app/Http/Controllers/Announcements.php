<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Announcements as ModelAnnouncements;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

use Illuminate\Support\Facades\Session;


class Announcements extends Controller
{
    
    function loadAnnouncementsPage() {
       
        $getannouncements = ModelAnnouncements::get();

        return view("announcements", ['announcements' => $getannouncements]);

    }

  
    //
    //
}
