<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>proyecto web</title>
</head>
<body>
    <p>
        <a href="{{route('Home')}}">Home</a>
        <a href="{{route('Blog')}}">Blog</a>
    </p>
    <hr>

    @yield('content')
</body>
</html>
