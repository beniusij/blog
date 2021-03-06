<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ setting('site.title') }} - @yield('title')</title>

        <!-- Stylesheet -->
        <link href="/css/app.css" rel="stylesheet" type="text/css">

        <!-- Header background image style -->
        <style>
            header {
                background-image: url("@yield('bg-image')");
                background-size: cover;
            }
        </style>
    </head>
    <body>
    <header>
        <div class="links">
            {{ menu('main') }}
        </div>
        <div class="container text-center">
            <h1>@yield('title')</h1>
        </div>
    </header>

    <div class="container content">
        @section('content')
            Content.
        @show
    </div>

    <footer class="text-center">
        <p>&copy; 2018 Juozas Beniusis</p>
    </footer>
    </body>
</html>