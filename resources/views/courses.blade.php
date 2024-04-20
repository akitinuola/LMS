@extends('base')

@section('body')
    <link href="{{ url('style/dashboard.css') }}" rel="stylesheet">
    <link href="{{ url('style/courses.css') }}" rel="stylesheet">

    <div class="dashboard-header">
        <h1>Courses</h1>
        <img class="settingspic" src="{{ url('icons/settings_icon.svg') }}" alt="">
    </div>

    <div class="courses">

        @foreach ($courses as $course)
            <div class="course-item">
                <div class="rectangle"></div>
                <div class="details">
                    <p><a href="courseinfo"> {{ $course->name }}</a></p>
                    <p>{{ $course->number }}</p>
                </div>
            </div>
        @endforeach
    </div>
@stop
