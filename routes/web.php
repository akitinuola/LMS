<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});


Route::get('/announcements', function () {
    return view('announcements');
});



Route::get('/profile', function () {
    return view('profile');
});


Route::get('/lecturers', function () {
    return view('lecturers');
});

Route::get('/grades', function () {
    return view('grades');
});

Route::get('/courses', function () {
    return view('courses');
});