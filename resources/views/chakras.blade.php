<x-layout>
  <div>
    <p>
    Each of the 72 Melakarta ragas are split into 12 chakras with each containing 6 ragas.
    </p>

    <p>
    The chakras are:
    </p>

    <ol>
        @foreach($chakras as $chakra)
            <li>
                {{ $chakra->id }}.
                <a href=" {{ route('chakra', ['id' => $chakra->id]) }}">
                    {{ $chakra->name }}
                </a>
            </li>
        @endforeach
    </ol>
  </div>
</x-layout>
