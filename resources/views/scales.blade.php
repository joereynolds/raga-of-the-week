<x-layout>
    <h1>Scales</h1>

    @foreach ($scales as $scale)
        @isset($scale->alsoKnownAs)
            <div class="flex justify-between p-4 bg-orange-100 mb-4">
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
                    <small>({{ $scale->alsoKnownAs->raga->name }})</small>
            </div>
        @else
            <div class="flex justify-between px-4 py-3 bg-orange-100 mb-4">
                <span>{{ $scale->name }}</span>
                <small>(no aliases found)</small>
            </div>
        @endisset

    @endforeach

    </ul>
</x-layout>
