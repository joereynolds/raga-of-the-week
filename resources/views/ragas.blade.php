<x-layout>
    <h1>Melakarta Ragas</h1>
    @foreach($melakartas as $raga)
        <div
            class="py-2 px-4 bg-orange-100 mb-4"
        >
            {{ $raga->id }}.
            <a href="{{ route('raga', ['id' => $raga->id]) }}" >
                {{ $raga->name }}
            </a>

            <details class="mt-2">
                <summary class="text-xs">Janyas</summary>
                <ul>
                    @foreach ($raga->janya as $janya)
                        <li>
                            <small>
                                <a href="{{ route('raga', ['id' => $janya->raga->id]) }}" >
                                    {{ $janya->raga->name }}
                                </a>
                            </small>
                        </li>
                    @endforeach
                </ul>
            </details>
        </div>
    @endforeach

    <h2>Janya Ragas</h2>

    @foreach($janyas as $raga)
        <div class="flex justify-between py-3 px-3 bg-orange-100 mb-4">
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
