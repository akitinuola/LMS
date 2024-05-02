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
            {{ $announcement->name }}
            <br>
            {{ $announcement->descripton }}
            <br>
            {{ $announcement->date }}
        </div>
    @endforeach






@stop
