<x-layout>
    <h1>Raga of the week</h1>

    <p>Welcome!</p>
    <p>Raga of the week shows a different Melakarta raga each week.</p>
    <p>This week's <strong>raga of the week</strong> is...</p>

    @foreach($ragas as $raga)

        <h2>{{ $raga->name }}</h2>

        <p>{{$raga->name}} is number {{$raga->id}} of the Melakarta ragas.</p>

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
                @foreach ($raga->arohana->list as $swara)
                    <td>{{$swara}}</td>
                @endforeach
            </tr>
            <tr>
                <td>Avarohana</td>
                @foreach ($raga->avarohana->list as $swara)
                    <td>{{$swara}}</td>
                @endforeach
            </tr>
            <tr>
                <td>Notes</td>
                @foreach ($raga->notes->list as $note)
                    <td>{{$note}}</td>
                @endforeach
            </tr>
            <tr>
                <td>Formula</td>
                @foreach ($raga->formula->list as $interval)
                    <td>{{$interval}}</td>
                @endforeach
            </tr>

        </table>

        @if ($raga->isJanya)
            <p>This particular raga is a janya meaning it is a descendant of a parent raga</p>
            <p>
                Its parent is... TODO
            </p>
        @endif

        @if (!$raga->isJanya)
            <h3>Janya Ragas</h3>
            <p>Janya ragas are ragas that are derived from the parent raga ({{$raga->name}}).</p>
            <p>Here are the Janya ragas for {{$raga->name}}</p>
            <ul>
                @forelse($raga->janya as $janya)
                    <li>
                        <a
                            href=" {{
                                route(
                                    'raga',
                                    ['id' => App\Models\Raga::find($janya->janya_id)->id]
                                )
                            }}"
                        >
                            {{ App\Models\Raga::find($janya->janya_id)->name }}
                        </a>
                    </li>
                @empty
                    <p>None found :(</p>
                @endforelse
            </ul>
        @endif

        <h3>Similar Ragas</h3>
        <p>A similar raga is one that differs by only one note</p>
        <p>Here's a list of closely related ragas</p>

            <ul>
                @forelse($raga->similarRaga as $similarRaga)
                    <li>
                        <a
                            href=" {{
                                route(
                                    'raga',
                                    ['id' => App\Models\Raga::find($similarRaga->linked_raga_id)->id]
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
    @endforeach
</x-layout>
