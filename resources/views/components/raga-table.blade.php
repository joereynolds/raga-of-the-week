<div class="inline-flex mb-4">
    <button
        class="rounded-l"
        data-notes='{
            "arohana": [
            @foreach ($raga->arohana as $arohana)
                "{{ $arohana->swara->note }}{{ $arohana->swara->scientific_pitch }}"{{ $loop->last ? '' : ',' }}
            @endforeach
            ],
            "avarohana": [
            @foreach ($raga->avarohana as $avarohana)
                "{{ $avarohana->swara->note }}{{ $avarohana->swara->scientific_pitch }}"{{ $loop->last ? '' : ',' }}
            @endforeach
            ]
        }'
    >
        Play Raga
    </button>
    <button data-transpose="-1">-</button>
    <button class="rounded-r" data-transpose="1">+</button>
</div>

<table>
    <tr>
        <td>Arohana</td>
        @foreach ($raga->arohana as $arohana)
            <td>{{ $arohana->swara->display_notation }}</td>
        @endforeach
    </tr>
    <tr>
        <td>Avarohana</td>
        @foreach ($raga->avarohana as $avarohana)
            <td>{{ $avarohana->swara->display_notation }}</td>
        @endforeach
    </tr>
    <tr>
        <td>Notes</td>
        @foreach ($raga->arohana as $arohana)
            <td class="note">{{ $arohana->swara->note }}{{ $arohana->swara->scientific_pitch }}</td>
        @endforeach
    </tr>
    <tr>
        <td>Formula</td>
        @foreach ($raga->arohana as $arohana)
            <td >{{ $arohana->swara->interval }}</td>
        @endforeach
    </tr>

</table>
