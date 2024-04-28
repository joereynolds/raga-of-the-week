<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Raga Of The Week</title>

        <script src="http://unpkg.com/tone"></script>
        <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

    </head>

    <body>

        @foreach($ragas as $raga)
            <h1>Raga of the week</h1>

            <h2>{{ $raga->name }}</h2>

            {{$raga->name}} is number {{$raga->number}} of the Melakarta ragas.

            <h3>Western bit<h3>

            <button
                data-notes='[
                    "{{$raga->notes->first}}",
                    "{{$raga->notes->second}}",
                    "{{$raga->notes->third}}",
                    "{{$raga->notes->fourth}}",
                    "{{$raga->notes->fifth}}",
                    "{{$raga->notes->sixth}}",
                    "{{$raga->notes->seventh}}"
                ]'
            >
                Play Raga
            </button>

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
                            <a
                                href=" {{
                                    route(
                                        'raga',
                                        ['id' => App\Models\Raga::find($similarRaga->linked_raga_id)->number]
                                    )
                                }}"
                            >
                                {{ App\Models\Raga::find($similarRaga->linked_raga_id)->name }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </p>
        @endforeach

        <footer>
            <a href="{{ route('random') }}">Random Raga</a>
            <small>Corrections? Please <a>Email me</a></small>
        </footer>

    </body>

<script defer>

(function() {
    Tone.Transport.start()
  // I am sorry for appropriating your culture badly
  function playRaga(notes) {
      const synth = new Tone.PolySynth().toDestination();
      synth.triggerAttackRelease('C2', 4);

      let delay = Tone.now();
      for(let i = 0; i < notes.length; i++) {
          synth.triggerAttackRelease(notes[i] + '4', '8n', delay);
          delay += 0.5
      }
      // Play the first note an octave higher to simulate the 8th note
      synth.triggerAttackRelease(notes[0] + '5', '8n', delay);
  }

  document.querySelectorAll("button").forEach(button => {
      button.addEventListener('click', () => {
        playRaga(JSON.parse(button.dataset.notes))
      });
  });
})();
</script>

</html>
