<x-layout>
    <h1>Scales</h1>

    @foreach ($scales as $scale)
        @isset($scale->alsoKnownAs)
            <div class="display-flex space-between link-container">
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
            <div class="display-flex space-between link-container">
                <span>{{ $scale->name }}</span>
                <small>(no aliases found)</small>
            </div>
        @endisset

    @endforeach

    </ul>
</x-layout>
