<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        {{-- STYLE --}}
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>

        {{-- HEADER --}}
        <header>Header here</header>
        
        {{-- MAIN --}}
        <main>
            @yield('content')
        </main>
        
        {{-- FOOTER --}}
        <footer>Footer here</footer>
    </body>
</html>