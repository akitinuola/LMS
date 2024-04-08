@extends('base')
<link href="{{ url('style/dashboard.css') }}" rel="stylesheet">
<link href="{{ url('style/lecturers.css') }}" rel="stylesheet">

@section('body')
    <div class="dashboard-header">
        <h1>Lecturers</h1>
        <img class="settingspic" src="{{ url('icons/settings_icon.svg') }}" alt="">
    </div>
    <div class="lecturertable">
        <table>
            <thead class="thead">
                <th></th>
                <th>Name</th>
                <th>Email</th>
                <th>Course Title</th>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <img class="profilepic" src="{{ url('icons/profilemain.svg') }}" alt="">
                    </td>
                    <td>Farouk</td>
                    <td>faroukbakre@yahoo.com</td>
                    <td>Dissertation</td>
                </tr>
                <tr>
                    <td>
                        <img class="profilepic" src="{{ url('icons/profilemain.svg') }}" alt="">
                    </td>
                    <td>Farouk</td>
                    <td>faroukbakre@yahoo.com</td>
                    <td>Dissertation</td>
                </tr>
                <tr>
                    <td>
                        <img class="profilepic" src="{{ url('icons/profilemain.svg') }}" alt="">
                    </td>
                    <td>Farouk</td>
                    <td>faroukbakre@yahoo.com</td>
                    <td>Dissertation</td>
                </tr>
                <tr>
                    <td>
                        <img class="profilepic" src="{{ url('icons/profilemain.svg') }}" alt="">
                    </td>
                    <td>Farouk</td>
                    <td>faroukbakre@yahoo.com</td>
                    <td>Dissertation</td>
                </tr>
                <tr>
                    <td>
                        <img class="profilepic" src="{{ url('icons/profilemain.svg') }}" alt="">
                    </td>
                    <td>Farouk</td>
                    <td>faroukbakre@yahoo.com</td>
                    <td>Dissertation</td>
                </tr>
                <tr>
                    <td>
                        <img class="profilepic" src="{{ url('icons/profilemain.svg') }}" alt="">
                    </td>
                    <td>Farouk</td>
                    <td>faroukbakre@yahoo.com</td>
                    <td>Dissertation</td>
                </tr>
            </tbody>
        </table>
    </div>





@stop
