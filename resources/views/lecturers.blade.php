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

                @foreach ($lecturers as $lecturer)
                    <tr>
                        <td>
                            <img class="profilepic" src="{{ url('icons/profilemain.svg') }}" alt="">
                        </td>
                        <td>{{ $lecturer->name }}</td>
                        <td>{{ $lecturer->email }}</td>
                        <td>{{ $lecturer->coursetitle }}</td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>





@stop
