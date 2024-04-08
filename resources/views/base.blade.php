<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>LMS</title>

    <!-- Custom fonts for this template-->
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ url('style/dashboard.css') }}" rel="stylesheet">
    

</head>

<body>
    <nav>
        <ul class="navigation-list">
            <li><img class="icon" src="{{ url('icons/home.svg') }}" alt="home">Home</li>
            <li><img class="icon" src="{{url('icons/courses.svg') }} "alt="courses"><a href="courses">Courses</a></li>
            <li><img class="icon" src= "{{url('icons/announcement.svg') }}" alt=""><a href="announcements">Announcement</a></li>
            <li><img class="icon" src= "{{url('icons/grades.svg') }}" alt="grades"><a href="grades">Grades</a></li>
            <li><img class="icon" src=" {{url('icons/profile.svg') }}" alt="profile"><a href="profile">Profie</a></li>
            <li><img class="icon" src="{{url('icons/lecturers.svg') }}" alt="lecturers"><a href="lecturers">Lecturers</a></li>
             <li><img class="icon" src="{{url('icons/sign_out.svg') }}" alt="signout"> <a href="signout">Sign out</a></li>
        </ul>
    </nav>
    <main>
        @yield('body')
    </main>

</body>

</html>
</body>

</html>
