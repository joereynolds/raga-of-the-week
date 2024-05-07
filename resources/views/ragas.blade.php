<x-layout>
    <h1>All Ragas</h1>

    <ul>
    @foreach($ragas as $raga)
        <li>
            <a
                href="{{ route('raga', ['id' => $raga->id]) }}"
            >
                {{ $raga->name }}
            </a>
        </li>

    @endforeach
    </ul>

</x-layout>
