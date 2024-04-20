<link href="{{ url('style/dashboard.css') }}" rel="stylesheet">
<link href="{{ url('style/signup.css') }}" rel="stylesheet">


<div class="signup-page">

    <div class="dashboard-header">
        <h1>Sign up</h1>
        <img class="settingspic" src="{{ url('icons/settings_icon.svg') }}" alt="">
    </div>
    <img class="signup-pic" src="{{ url('icons/profilemain.svg') }}" alt="">


    <form action="{{ url('signup') }}" method="post">
        @csrf
        @if (count($errors))
            @foreach ($errors->all() as $error)
                <div style="color: black;"> {{ $error }}</div>
            @endforeach
        @endif
        <input class="text" type="text" name="firstname" placeholder="Firstname" value="{{ old('firstname') }}"
            required>
        <input class="text email" type="text" name="lastname" placeholder="Lastname" value="{{ old('lastname') }}"
            required>
        <input class="text email" type="email" name="email" placeholder="Email" value="{{ old('email') }}"
            required>
        <input class="text email" type="password" name="password" placeholder="Password" value="{{ old('password') }}"
            required>
        <input class="text email" type="password" name="password_confirmation" placeholder="Confirm Password" required>

        <button class="signup-main">Sign Up</button>
    </form>
</div>
