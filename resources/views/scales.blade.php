<x-layout>
    <h1>Scales</h1>

    <ul>

    @foreach ($scales as $scale)
        @isset($scale->alsoKnownAs)
            <li>
                <a
                    href=" {{
                        route(
                            'raga',
                            ['id' => $scale->alsoKnownAs->raga->id]
                        )
                    }}"
                >
                    {{ $scale->name }}
                </a>
            </li>
        @else
            <li>{{ $scale->name }} (no aliases found)</li>
        @endisset

    @endforeach

    </ul>
</x-layout>
