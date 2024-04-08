@extends('base')
<link href="{{ url('style/dashboard.css') }}" rel="stylesheet">
<link href="{{ url('style/grades.css') }}" rel="stylesheet">

@section('body')
    <div class="dashboard-header">
        <h1>Grades</h1>
        <img class="settingspic" src="{{ url('icons/settings_icon.svg') }}" alt="">
    </div>

    <div class="grades">
        Introduction to Computing
        <div class="gradepoint">
            90%
        </div>
    </div>
    <div class="grades">
        <div class="gradepoint">
            90%
        </div>
        Digital Innovation
    </div>
    <div class="grades">
        <div class="gradepoint">
            90%
        </div>
        Data Structures
    </div>
    <div class="grades">
        <div class="gradepoint">
            90%
        </div>
        Programming 101
    </div>
    <div class="grades">
        <div class="gradepoint">
            90%
        </div>
        Research Methods
    </div>
    <div class="grades">
        <div class="gradepoint">
            90%
        </div>
   Computing Symatics
    </div>






@stop
