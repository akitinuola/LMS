<link href="{{ url('style/dashboard.css') }}" rel="stylesheet">
<link href="{{ url('style/login.css') }}" rel="stylesheet">


<div class="login-page">

    <div class="dashboard-header">
        <h1>Login</h1>
        <img class="settingspic" src="{{ url('icons/settings_icon.svg') }}" alt="">
    </div>
    <img class="loginpic" src="{{ url('icons/profilemain.svg') }}" alt="">


    <form action="{{ url('login') }}" method="post" class="login">
        @csrf
        @if (count($errors))
            @foreach ($errors->all() as $error)
                <div style="color: black;"> {{ $error }}</div>
            @endforeach
        @endif
        <input class="text email" type="email" name="email" placeholder="Email" value="{{ old('email') }}"
            required>

        <input class="text email" type="password" name="password" placeholder="Password" value="{{ old('password') }}"
            required>
        <button class="signup-main">Login</button>
        <p>Don't have an Account? <a href="signup"> Sign up now!</a></p>
    </form>


</div>
