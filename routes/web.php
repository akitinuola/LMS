<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Signup;
use App\Http\Controllers\Login;
use App\Http\Controllers\Lecturers;
use App\Http\Controllers\Courses;
use App\Http\Controllers\Announcements;
use App\Http\Controllers\Home;
use App\Http\Controllers\Profile;

Route::get('/', function () {
    return view('login');
});

Route::get('/announcements', [Announcements::class,"loadAnnouncementsPage"]);


Route::get('/profile', [Profile::class,"loadProfilePage"]);

Route::get('/lecturers', [Lecturers::class,"loadLecturersPage"]);

Route::get('/grades', function () {
    return view('grades');
});

Route::get('/courses', function () {
    return view('courses');
});

Route::get('/home', [Home::class,"loadHomePage"]);

Route::get('/signup', function () {
    return view('signup');
});

Route::get('/courseinfo', function () {
    return view('courseinfo');
});

Route::post('/signup', [Signup::class,"registerUser"]);

Route::get('/login', [Login::class,"returnLoginpage"]);
 Route::post('/login', [Login::class,"login"]);

 Route::get('/courses', [Courses::class,"loadCoursesPage"]);