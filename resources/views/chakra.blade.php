<x-layout>

<div>
    <p>
        {{ $chakra->name }} is number {{ $chakra->id }} of the <a href=" {{ route('chakra-index') }}">chakras</a>.
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
