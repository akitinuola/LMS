@extends('base')
<link href="{{ url('style/dashboard.css') }}" rel="stylesheet">
<link href="{{ url('style/announcement.css') }}" rel="stylesheet">

@section('body')

    <div class="dashboard-header">
        <h1>Announcements</h1>
        <form action="{{ url('changemode') }}" method="post" >
            @csrf
            <select name="mode" id="mode">
                <option value="light" {{ (session('mode') === 'light')? 'selected' : '' }}>Light Mode</option>
                <option value="dark" {{ (session('mode') === 'dark') ? 'selected' : '' }}>Dark Mode</option>
            </select>
            <button type="submit">Save</button>
        </form>
    </div>

    @foreach ($announcements as $announcement)
    <div class="announcements">
        <p class="head">{{ $announcement->name }}</p>
       <p class="middle">{{ $announcement->descripton }}</p> 
       <p class="end"> {{ $announcement->date }}</p>
    </div>
@endforeach






@stop
