<x-layout>
    <h1>Scales</h1>

    <ul>

    @foreach ($scales as $scale)
        <li>
            <a>{{ $scale->name }}</a>
        </li>
    @endforeach

    </ul>
</x-layout>
