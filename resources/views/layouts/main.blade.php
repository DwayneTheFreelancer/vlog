<html>
    <head>
        <title>App Name - @yield('title')</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        {{--  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">  --}}
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
        <header>
            <div class="container">
                <nav>
                    <a href="#">Home</a>
                    <a href="#">About</a>
                    <a href="#">Search</a>
                    <a href="#">Contact</a>
                </nav>
            </div>
        </header>

        <div class="container">
            @yield('content')
        </div>

    </body>
</html>