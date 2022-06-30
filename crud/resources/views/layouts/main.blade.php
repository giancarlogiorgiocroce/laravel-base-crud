<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    <title>Es-Crud | @yield('title')</title>
</head>
<body>
    <nav class="my_container">
        <ul>
            <li><a href="{{route('home')}}">Home</a></li>
            <li><a href="{{route('comics.index')}}">Index</a></li>
            <li><a href="{{route('comics.create')}}">Create</a></li>
        </ul>
    </nav>
    <div class="my_container">
        @yield('content')
    </div>
</body>
</html>
