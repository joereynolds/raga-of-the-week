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
        <header class="flex-container">
            <a href="{{ route('weekly') }}">ROTW</a>
            <a class="text-align-center" href="{{ route('index') }}">Ragas</a>
            <a class="text-align-right" href="{{ route('scales') }}">Scales</a>
        </header>

        <main>{{ $slot }}</main>
    </body>
</html>
