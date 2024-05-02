@extends('base')
<link href="{{ url('style/dashboard.css') }}" rel="stylesheet">
<link href="{{ url('style/grades.css') }}" rel="stylesheet">

@section('body')
    <div class="dashboard-header">
        <h1>Grades</h1>
        <form action="{{ url('changemode') }}" method="post">
            @csrf
            <select name="mode" id="mode">
                <option value="light" {{ session('mode') === 'light' ? 'selected' : '' }}>Light Mode</option>
                <option value="dark" {{ session('mode') === 'dark' ? 'selected' : '' }}>Dark Mode</option>
            </select>
            <button type="submit">Save</button>
        </form>
    </div>

    @foreach ($grades as $grade)
        <div class="grades">
            {{ $grade->courseDetails->name }}
            <div class="gradepoint">
                {{ $grade->grades }}

            </div>
        </div>
    @endforeach
@stop
