<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Juan Cast Admin | Login</title>
    <link rel="icon" type="image/x-icon" href="{{asset('images/favicon.ico')}}">
    <link href="{{ asset('css/global.css') }}" rel="stylesheet">
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
</head>

<body>
    <div id="login_container">

        <form method="POST" action="{{route('login.login')}}">
            @csrf
            <h2>Log In</h2>
            <input type="text" class="default_input" name="username" placeholder="Username" required>
            <input type="password" class="default_input" name="password" placeholder="Password" required>
            <button class="default_button">Log In</button>
            
        </form>
    </div>

    @if (session('loginError'))
        <script>alert('Invalid Credentials')</script>
    @endif
</body>

</html>
