<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Raga Of The Week</title>

        <script src="https://unpkg.com/tone"></script>
        <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

    </head>

    <body>
        <h1>Raga of the week</h1>

        <p>Welcome!</p>
        <p>Raga of the week shows a different Melakarta raga each week*.</p>
        <p>This week's <strong>raga of the week</strong> is...</p>
        <small>*(Support for other ragas like Janyas is on the list)</small>

        @foreach($ragas as $raga)

            <h2>{{ $raga->name }}</h2>

            <p>{{$raga->name}} is number {{$raga->number}} of the Melakarta ragas.</p>


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

            <table>
                <tr>
                    <td>Arohana</td>
                    <td>{{$raga->arohana->shadja}}</td>
                    <td>{{$raga->arohana->rishabha}}</td>
                    <td>{{$raga->arohana->gandhara}}</td>
                    <td>{{$raga->arohana->madhyama}}</td>
                    <td>{{$raga->arohana->panchama}}</td>
                    <td>{{$raga->arohana->dhaivata}}</td>
                    <td>{{$raga->arohana->nishada}}</td>
                </tr>
                <tr>
                    <td>Avarohana</td>
                    <td>{{$raga->avarohana->shadja}}</td>
                    <td>{{$raga->avarohana->nishada}}</td>
                    <td>{{$raga->avarohana->dhaivata}}</td>
                    <td>{{$raga->avarohana->panchama}}</td>
                    <td>{{$raga->avarohana->madhyama}}</td>
                    <td>{{$raga->avarohana->gandhara}}</td>
                    <td>{{$raga->avarohana->rishabha}}</td>
                </tr>
                <tr>
                    <td>Notes</td>
                    <td>{{$raga->notes->first}}</td>
                    <td>{{$raga->notes->second}}</td>
                    <td>{{$raga->notes->third}}</td>
                    <td>{{$raga->notes->fourth}}</td>
                    <td>{{$raga->notes->fifth}}</td>
                    <td>{{$raga->notes->sixth}}</td>
                    <td>{{$raga->notes->seventh}}</td>
                </tr>
                <tr>
                    <td>Formula</td>
                    <td>{{$raga->formula->first}}</td>
                    <td>{{$raga->formula->second}}</td>
                    <td>{{$raga->formula->third}}</td>
                    <td>{{$raga->formula->fourth}}</td>
                    <td>{{$raga->formula->fifth}}</td>
                    <td>{{$raga->formula->sixth}}</td>
                    <td>{{$raga->formula->seventh}}</td>
                </tr>

            </table>

            <p>
                Similar ragas

                <ul>
                    @forelse($raga->similarRaga as $similarRaga)
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
                    @empty
                        <p>None found :(</p>
                    @endforelse
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
