<x-layout>
    <h1>All Ragas</h1>

    <h2>Melakarta Ragas</h2>
    @foreach($melakartas as $raga)
        <div
            class="link-container"
        >
            {{ $raga->id }}.
            <a href="{{ route('raga', ['id' => $raga->id]) }}" >
                {{ $raga->name }}
            </a>

            <details>
                <summary>Janyas</summary>
                <ul>
                    @foreach ($raga->janya as $janya)
                        <li>
                            <a href="{{ route('raga', ['id' => $janya->raga->id]) }}" >
                                {{ $janya->raga->name }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </details>
        </div>
    @endforeach

    <h2>Janya Ragas</h2>

    @foreach($janyas as $raga)
        <div class="display-flex space-between link-container">
            <a href="{{ route('raga', ['id' => $raga->id]) }}" >
                {{ $raga->name }}
            </a>
            @php
                $parentId = App\Models\MelakartaJanyaLink::where('janya_id', $raga->id)->first()->raga_id;
                $parentRaga = App\Models\Raga::find($parentId);
            @endphp

            <small>
                <a href="{{ route('raga', ['id' => $parentRaga->id]) }}" >
                    ({{ $parentRaga->name }})
                </a>
            </small>
        </div>

    @endforeach

</x-layout>
