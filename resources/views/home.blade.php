@extends('base')

@section('body')
    <link href="{{ url('style/dashboard.css') }}" rel="stylesheet">
    <link href="{{ url('style/home.css') }}" rel="stylesheet">

    <div class="dashboard-header">
        <h1>Home</h1>
        <form action="{{ url('changemode') }}" method="post" >
            @csrf
            <select name="mode" id="mode">
                <option value="light" {{ (session('mode') === 'light')? 'selected' : '' }}>Light Mode</option>
                <option value="dark" {{ (session('mode') === 'dark') ? 'selected' : '' }}>Dark Mode</option>
            </select>
            <button type="submit">Save</button>
        </form>
    </div>
    <div class="details">
        <p class="heading">Recent Courses</p>
    </div>
    
    <div class="courses">

        @foreach ($courses as $course)
            <div class="course-item">
                <div class="rectangle">
                    <img class="profilepic" src="{{ url('img/computing'.$course->id.'.jpg') }}" alt="Computingicon">
                </div>
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
            <p class="head">{{ $announcement->name }}</p>
           <p class="middle">{{ $announcement->descripton }}</p> 
           <p class="end"> {{ $announcement->date }}</p>
        </div>
    @endforeach






    @stop
