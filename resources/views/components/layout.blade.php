<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Raga Of The Week</title>

        <script src="https://unpkg.com/tone"></script>
        <script defer src="{{asset('assets/js/app.js')}}"></script>

        <link rel="stylesheet" href="{{asset('assets/css/compiled.css')}}">
    </head>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-JYLQ9SLPVN"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-JYLQ9SLPVN');
    </script>

    <body class="sm:m-auto sm:w-[440px]">
        <header class="flex justify-between mb-4 font-bold">
            <a href="{{ route('weekly') }}">ROTW</a>
            <a href="{{ route('index') }}">Ragas</a>
            <a href="{{ route('scales') }}">Scales</a>
        </header>

        <main>{{ $slot }}</main>
    </body>
</html>
