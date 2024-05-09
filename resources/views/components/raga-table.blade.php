<button
    data-notes='{
        "arohana": [
        @foreach ($raga->arohana as $arohana)
            "{{ $arohana->swara->note }}"{{ $loop->last ? '' : ',' }}
        @endforeach
        ],
        "avarohana": [
        @foreach ($raga->avarohana as $avarohana)
            "{{ $avarohana->swara->note }}"{{ $loop->last ? '' : ',' }}
        @endforeach
        ]
    }'
>
    Play Raga
</button>
<button data-transpose="-1">-</button>
<button data-transpose="1">+</button>

<table>
    <tr>
        <td>Arohana</td>
        @foreach ($raga->arohana as $arohana)
            <td>{{ $arohana->swara->notation }}</td>
        @endforeach
    </tr>
    <tr>
        <td>Avarohana</td>
        @foreach ($raga->avarohana as $avarohana)
            <td>{{ $avarohana->swara->notation }}</td>
        @endforeach
    </tr>
    <tr>
        <td>Notes</td>
        @foreach ($raga->arohana as $arohana)
            <td class="note">{{ $arohana->swara->note }}3</td>
        @endforeach
    </tr>
    <tr>
        <td>Formula</td>
        @foreach ($raga->arohana as $arohana)
            <td >{{ $arohana->swara->interval }}</td>
        @endforeach
    </tr>

</table>
