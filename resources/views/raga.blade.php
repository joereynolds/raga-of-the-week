<x-layout>
    <h1>Raga of the week</h1>

    <p>Welcome!</p>
    <p>Raga of the week shows a different Melakarta raga each week.</p>
    <p>This week's <strong>raga of the week</strong> is...</p>

    @foreach($ragas as $raga)

        <h2>{{ $raga->name }}</h2>

        <p>{{$raga->name}} is number {{$raga->id}} of the Melakarta ragas.</p>

        <x-raga-table :raga="$raga"/>

        @if ($raga->isJanya)
            @php
                $id = App\Models\MelakartaJanyaLink::where('janya_id', $raga->id)->first()->raga_id;
                $parent = App\Models\Raga::find($id);
            @endphp
            <p>This particular raga is a janya meaning it is a descendant of a parent raga</p>
            <p>
                Its parent is
                <a href=" {{ route('raga', ['id' => $id]) }}">
                    {{ $parent->name }}
                </a>
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

        <x-similar-ragas :raga="$raga"/>
    @endforeach
    <x-footer :previousRagaId="$raga->previous" :nextRagaId="$raga->next"></x-footer>
</x-layout>
