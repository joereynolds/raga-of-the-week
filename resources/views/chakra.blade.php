<x-layout>

<div>
    <h2>{{ $chakra->name }}</h2>
    <p>
        {{ $chakra->name }} is number {{ $chakra->id }} of the 12 <a href=" {{ route('chakra-index') }}">chakras</a>.
    </p>

    <p>
        {{ $chakra->description }}
    </p>

    <p>
        It has the following ragas:
    </p>

    <ol>
    @foreach($chakra->ragaLink as $link)
        <li>
            {{ $link->raga->id }}.
            <a href="{{ route('raga', ['id' => $link->raga->id]) }}">
                {{ $link->raga->name }}
            </a>
        </li>
    @endforeach
    </ol>
</div>
</x-layout>
