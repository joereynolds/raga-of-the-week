<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Raga Of The Week</title>
    </head>

    <body>

        @foreach($ragas as $raga)
            <h1>Raga of the week</h1>

            <h2>{{ $raga->name }}</h2>

            {{$raga->name}} is number {{$raga->number}} of the Melakarta ragas.

            <h3>Western bit<h3>

            <p>
                Arohana
                {{$raga->arohana->shadja}}
                {{$raga->arohana->rishabha}}
                {{$raga->arohana->gandhara}}
                {{$raga->arohana->madhyama}}
                {{$raga->arohana->panchama}}
                {{$raga->arohana->dhaivata}}
                {{$raga->arohana->nishada}}
            </p>

            <p>
                Avarohana
                {{$raga->avarohana->shadja}}
                {{$raga->avarohana->nishada}}
                {{$raga->avarohana->dhaivata}}
                {{$raga->avarohana->panchama}}
                {{$raga->avarohana->madhyama}}
                {{$raga->avarohana->gandhara}}
                {{$raga->avarohana->rishabha}}
            </p>

            <p>
                Formula
                {{$raga->formula->first}}
                {{$raga->formula->second}}
                {{$raga->formula->third}}
                {{$raga->formula->fourth}}
                {{$raga->formula->fifth}}
                {{$raga->formula->sixth}}
                {{$raga->formula->seventh}}
            </p>

            <p>
                Notes
                {{$raga->notes->first}}
                {{$raga->notes->second}}
                {{$raga->notes->third}}
                {{$raga->notes->fourth}}
                {{$raga->notes->fifth}}
                {{$raga->notes->sixth}}
                {{$raga->notes->seventh}}
            </p>

            <p>
                Similar ragas

                <ul>
                    @foreach($raga->similarRaga as $similarRaga)
                            <li>
                                <a>{{ App\Models\Raga::find($similarRaga->linked_raga_id)->name }}</a>
                            </li>
                    @endforeach
                </ul>
            </p>
        @endforeach

    </body>
</html>
