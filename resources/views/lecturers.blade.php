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
                    <td>Mercy Deis</td>
                    <td>mercdeis@yahoo.com</td>
                    <td>Introduction to Computing</td>
                </tr>
                <tr>
                    <td>
                        <img class="profilepic" src="{{ url('icons/profilemain.svg') }}" alt="">
                    </td>
                    <td>Tom Bradley</td>
                    <td>tombrad@yahoo.com</td>
                    <td> Digital Innovation</td>
                </tr>
                <tr>
                    <td>
                        <img class="profilepic" src="{{ url('icons/profilemain.svg') }}" alt="">
                    </td>
                    <td>Lara Baker</td>
                    <td>Lbaker@gmail.com</td>
                    <td> Data Structures</td>
                </tr>
                <tr>
                    <td>
                        <img class="profilepic" src="{{ url('icons/profilemain.svg') }}" alt="">
                    </td>
                    <td>Derek Fraser</td>
                    <td>fraserderek@yahoo.com</td>
                    <td>Programming 101</td>
                </tr>
                <tr>
                    <td>
                        <img class="profilepic" src="{{ url('icons/profilemain.svg') }}" alt="">
                    </td>
                    <td>Leah Walden</td>
                    <td>waldenleah@yahoo.com</td>
                    <td>Dissertation</td>
                </tr>
                <tr>
                    <td>
                        <img class="profilepic" src="{{ url('icons/profilemain.svg') }}" alt="">
                    </td>
                    <td>Bradley Herr</td>
                    <td>herrb@yahoo.com</td>
                    <td> Research Methods</td>
                </tr>
            </tbody>
        </table>
    </div>





@stop
