@extends('base')
<link href="{{ url('style/dashboard.css') }}" rel="stylesheet">
<link href="{{ url('style/profile.css') }}" rel="stylesheet">

@section('body')
    <div class="profile-page">

        <div class="dashboard-header">
            <h1>Profile</h1>
            <form action="{{ url('changemode') }}" method="post" >
                @csrf
                <select name="mode" id="mode">
                    <option value="light" {{ (session('mode') === 'light')? 'selected' : '' }}>Light Mode</option>
                    <option value="dark" {{ (session('mode') === 'dark') ? 'selected' : '' }}>Dark Mode</option>
                </select>
                <button type="submit">Save</button>
            </form>
        </div>
        <img class="profilepic" src="{{ url('icons/profilemain.svg') }}" alt="">

        <form class="profile-form" action="{{ url('profile') }}" method="post">
            @csrf
            @if (count($errors))
                @foreach ($errors->all() as $error)
                    <div style="color: black;"> {{ $error }}</div>
                @endforeach
            @endif

            <input class="profilemain" type="text" name="firstname" placeholder="First Name" value="{{ $user->firstname }}">
            <input class="profilemain" type="text" name="lastname"  placeholder="Last Name" value="{{ $user->lastname }}">
            <input class="profilemain" type="email" name="email" placeholder="Email" value="{{ $user->email }}">
            <button class="profilebutton">Submit</button>

        </form>
    </div>

@stop
