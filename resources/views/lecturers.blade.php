@extends('base')


@section('body')
<link href="{{ url('style/dashboard.css') }}" rel="stylesheet">
<link href="{{ url('style/lecturers.css') }}" rel="stylesheet">

    <div class="dashboard-header">
        <h1>Lecturers</h1>
        <form action="{{ url('changemode') }}" method="post" >
            @csrf
            <select name="mode" id="mode">
                <option value="light" {{ (session('mode') === 'light')? 'selected' : '' }}>Light Mode</option>
                <option value="dark" {{ (session('mode') === 'dark') ? 'selected' : '' }}>Dark Mode</option>
            </select>
            <button type="submit">Save</button>
        </form>
    </div>
    <div class="lecturertable">
        <table>
            <thead class="thead">
                <tr>
                <th></th>
                <th>Name</th>
                <th>Email</th>
                <th>Course Title</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($lecturers as $lecturer)
                    <tr>
                        <td>
                            <img class="profilepic" src="{{ url('icons/profilemain.svg') }}" alt="profile-picture icon">
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
