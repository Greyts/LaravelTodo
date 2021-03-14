<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }}</title>
    <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">
</head>
<body>
    
    <div class="content">
            <div class="container">
                <div id="example"></div>
            </div>
            <script src="{{asset('js/app.js')}}"></script>

            @if (Route::has('login'))
            <div class="center-buttons">
            @auth
                <a href="{{ url('/tasks') }}">Tasks</a>
            @else
                <p><a href="{{ route('login') }}">Login</a></p>
                <p></p><a href="{{ route('register') }}">Register</a></p>
            @endauth

            
            </div>
            
    @endif
        </div>
    
</body>
</html>