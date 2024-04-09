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

Route::get('/home', function () {
    return view('home');
});

Route::get('/signup', function () {
    return view('signup');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/courseinfo', function () {
    return view('courseinfo');
});