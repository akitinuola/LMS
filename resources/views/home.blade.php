@extends('base')

@section('body')
    <link href="{{ url('style/dashboard.css') }}" rel="stylesheet">
    <link href="{{ url('style/home.css') }}" rel="stylesheet">

    <div class="dashboard-header">
        <h1>Courses</h1>
        <form action="{{ url('changemode') }}" method="post" >
            @csrf
            <select name="mode" id="mode">
                <option value="light" {{ (session('mode') === 'light')? 'selected' : '' }}>Light Mode</option>
                <option value="dark" {{ (session('mode') === 'dark') ? 'selected' : '' }}>Dark Mode</option>
            </select>
            <button type="submit">Save</button>
        </form>
    </div>
    <p class="heading">Recent Courses</p>
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

    </div>


    <div class="details">
        <p class="heading">Recent Announcements</p>


        @foreach ($announcements as $announcement)
        <div class="announcements">
            {{ $announcement->name }}
            <br>
            {{ $announcement->descripton }}
            <br>
            {{ $announcement->date }}
        </div>
    @endforeach






    @stop
