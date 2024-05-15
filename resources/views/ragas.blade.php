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
        <div class="link-container">
            <a href="{{ route('raga', ['id' => $raga->id]) }}" >
                {{ $raga->name }}
            </a>
        </div>

    @endforeach

</x-layout>
