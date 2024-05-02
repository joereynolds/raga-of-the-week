<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Raga Of The Week</title>

        <script src="https://unpkg.com/tone"></script>
        <script defer src="{{asset('assets/js/app.js')}}"></script>

        <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    </head>

    <body>
        <main>{{ $slot }}</main>
    </body>
</html>
