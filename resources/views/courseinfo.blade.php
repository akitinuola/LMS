@extends('base')
<link href="{{ url('style/dashboard.css') }}" rel="stylesheet">
<link href="{{ url('style/courseinfo.css') }}" rel="stylesheet">

@section('body')
    <div class="profile-page">

        <div class="dashboard-header">
            <h1>Course Info</h1>
            <img class="settingspic" src="{{ url('icons/settings_icon.svg') }}" alt="">
            <form action="{{ url('changemode') }}" method="post" >
                @csrf
                <select name="mode" id="mode">
                    <option value="light" {{ (session('mode') === 'light')? 'selected' : '' }}>Light Mode</option>
                    <option value="dark" {{ (session('mode') === 'dark') ? 'selected' : '' }}>Dark Mode</option>
                </select>
                <button type="submit">Save</button>
            </form>
        </div>

        <p class="heading">Programming 101</p>
        <p>Course Details</p>
        <div class="course-body">
            Lorem ipsum dolor sit amet. Qui reprehenderit sapiente ea galisum magnam ut voluptatem perspiciatis qui facere
            incidunt qui autem error ut enim facilis hic dolores autem. Sed molestiae enim est consequatur autem ad
            architecto dicta non dolores molestiae sit rerum voluptatem. Et dicta accusamus et internos tempore ut animi
            dolore rem dolorum voluptates. Sit itaque quod ea quis quae est aperiam voluptatem et molestias doloribus et
            nihil quisquam sed quisquam sunt. Et animi dolores ut blanditiis corporis et aspernatur atque sit voluptatum
            delectus. A numquam eaque sed minima maxime in quas suscipit aut consequuntur dolore. Ut voluptas aliquid hic
            eius corrupti id eaque laboriosam! In nihil voluptatem aut officia nostrum est unde rerum. Qui perspiciatis
            eaque aut rerum distinctio est beatae voluptas sit optio omnis 33 sunt voluptatem. Rem aliquid similique sed
            dolore placeat aut incidunt sapiente et quia quos non veniam consequuntur?
        </div>
        <br>
        <p> Course Leader: Leah walden</p>
        <p>Timetable: Thursdays 12:00 - 13:30</p>
    </div>









@stop
