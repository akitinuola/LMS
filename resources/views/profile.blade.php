@extends('base')
<link href="{{ url('style/dashboard.css') }}" rel="stylesheet">
<link href="{{ url('style/profile.css') }}" rel="stylesheet">

@section('body')
<div class="profile-page">

    <div class="dashboard-header">
        <h1>Profile</h1>
        <img class="settingspic" src="{{ url('icons/settings_icon.svg') }}" alt="">
    </div>
    <img class="profilepic" src="{{ url('icons/profilemain.svg') }}" alt="">

   
        <input class="profilemain" type="text">
        <input class="profilemain" type="text">
        <input class="profilemain" type="text">
        <input class="profilemain" type="text">
        <input class="profilebutton" type="button">
        
        
</div>









@stop