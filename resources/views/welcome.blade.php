<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }}</title>
</head>
<body>
    <div class="content">
        <div class="title m-b-md">
            {{ config('app.name') }}
        </div>

        @if (Route::has('login'))
        <div class="top-right links">
        @auth
            <a href="{{ url('/tasks') }}">Tasks</a>
        @else
            <a href="{{ route('login') }}">Login</a>
            <a href="{{ route('register') }}">Register</a>
        @endauth
    </div>
@endif
    </div>
</body>
</html>