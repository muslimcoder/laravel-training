<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <script type="text/javascript" src="/js/app.js"></script>
    <script type="text/javascript" src="{{ asset('/js/app.js') }}"></script>
    <title>@yield('title')</title>


</head>
<body>
    <header>
        <nav>
            <a href="/home">Home</a>
        </nav>
    </header>
    @yield('content')
    <footer>
     <p>&copy:Brainmatics Training Laravel 2020</p>
    </footer>
</body>
</html>
