<h3>Janya Ragas</h3>
<p>Janya ragas are ragas that are derived from the parent raga ({{$raga->name}}).</p>
<p>Here are the Janya ragas for {{$raga->name}}:</p>

<table>
    <tr>
        <th class="text-sm text-left">Listen</th>
        <th class="text-sm text-left">Raga</th>
        <th class="text-sm text-left">Swaras</th>
    </tr>
    @forelse($raga->janya as $janya)
        <tr>
            <td>

                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="size-4 text-amber-700 fill-amber-500 cursor-pointer"
                    data-no-highlight
                    data-notes='{
                        "arohana": [
                        @foreach ($janya->raga->arohana as $arohana)
                            "{{ $arohana->swara->note }}{{ $arohana->swara->scientific_pitch }}"{{ $loop->last ? '' : ',' }}
                        @endforeach
                        ],
                        "avarohana": [
                        @foreach ($janya->raga->avarohana as $avarohana)
                            "{{ $avarohana->swara->note }}{{ $avarohana->swara->scientific_pitch }}"{{ $loop->last ? '' : ',' }}
                        @endforeach
                        ]
                    }'
                >
                  <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M5.25 5.653c0-.856.917-1.398 1.667-.986l11.54 6.347a1.125 1.125 0 0 1 0 1.972l-11.54 6.347a1.125 1.125 0 0 1-1.667-.986V5.653Z"
                  />
                </svg>

            </td>

            <td>
                <a
                    href="{{route('raga', ['id' => $janya->raga->id])}}"
                >
                    {{ $janya->raga->name }}
                </a>
            </td>
            <td class="text-xs">
                @foreach ($janya->raga->arohana as $arohana)
                    {{ $arohana->swara->display_notation }}{{ $loop->last ? '' : ',' }}
                @endforeach
            </td>
        </tr>
    @empty
        <tr>
            <td>No Janyas found</td>
        </tr>
    @endforelse
</table>
