<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Raga Of The Week</title>
    </head>

    <body>
        @php
            $theory = json_decode($raga->theory);

        @endphp
        <h1>Raga of the week</h1>

        <h2>{{ $raga->name }}</h2>

        {{$raga->name}} is number {{$raga->number}} of the Melakarta ragas.

        <h3>Western bit<h3>

        <p>Arohanam {{ json_encode($theory->arohanam) }}</p>
        <p>Avarohanam {{ json_encode($theory->avarohanam) }}</p>

        <p>Formula {{ json_encode($theory->formula) }}</p>
        <p>Notes {{ json_encode($theory->notes) }}</p>

    </body>
</html>
