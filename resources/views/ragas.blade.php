<x-layout>
    <h1>All Ragas</h1>

    @foreach($ragas as $raga)
        <div>{{ $raga->id }}.
            <a href="{{ route('raga', ['id' => $raga->id]) }}" >
                {{ $raga->name }}
            </a>
        </div>

    @endforeach

</x-layout>
