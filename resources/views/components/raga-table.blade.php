<div class="mb-4">

    <div class="flex justify-between">

        <div>
            <button
                class="rounded-sm text-sm"
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
        </div>

        <div>
            <button class="rounded-sm" data-transpose="-1">-</button>
            <button class="rounded-sm" data-transpose="1">+</button>
        </div>

    </div>

</div>

<table class="text-sm w-full">
    <tr>
        <td class="font-bold">Arohana</td>
        @foreach ($raga->arohana as $arohana)
            <td>{{ $arohana->swara->display_notation }}</td>
        @endforeach
    </tr>
    <tr>
        <td class="font-bold">Avarohana</td>
        @foreach ($raga->avarohana as $avarohana)
            <td>{{ $avarohana->swara->display_notation }}</td>
        @endforeach
    </tr>
    <tr>
        <td class="font-bold">Notes</td>
        @foreach ($raga->arohana as $arohana)
            <td class="note">{{ $arohana->swara->note }}{{ $arohana->swara->scientific_pitch }}</td>
        @endforeach
    </tr>
    <tr>
        <td class="font-bold">Formula</td>
        @foreach ($raga->arohana as $arohana)
            <td >{{ $arohana->swara->interval }}</td>
        @endforeach
    </tr>

</table>
