@extends('base')
<link href="{{ url('style/dashboard.css') }}" rel="stylesheet">
<link href="{{ url('style/announcement.css') }}" rel="stylesheet">

@section('body')
    <div class="dashboard-header">
        <h1>Announcements</h1>
        <img class="settingspic" src="{{ url('icons/settings_icon.svg') }}" alt="">
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
