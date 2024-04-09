@extends('base')

@section('body')
    <link href="{{ url('style/dashboard.css') }}" rel="stylesheet">
    <link href="{{ url('style/home.css') }}" rel="stylesheet">

    <div class="dashboard-header">
        <h1>Courses</h1>
        <img class="settingspic" src="{{ url('icons/settings_icon.svg') }}" alt="">
    </div>
    <p class="heading">Recent Courses</p>
    <div class="courses">
        <div class="course-item">
            <div class="rectangle"></div>
            <div class="details">
                <p>Data Structures</p>
                <p>Data102</p>
            </div>
        </div>
        <div class="course-item">
            <div class="rectangle1"></div>
            <div class="details">
                <p>Digital Innovation</p>
                <p>DI103</p>
            </div>
        </div>
        <div class="course-item">
            <div class="rectangle2"></div>
            <div class="details">
                <p>Programming 101</p>
                <p>Pro231</p>
            </div>
        </div>

    </div>


    <div class="details">
        <p class="heading">Recent Announcements</p>


        <div class="announcements">
            cghhcjcdhcdjhcdhcjkdjhkcjdcjhkd
        </div>
        <div class="announcements">
            cghhcjcdhcdjhcdhcjkdjhkcjdcjhkd
        </div>






    @stop
