<button
    data-notes='[
        "{{$raga->notes->first}}",
        "{{$raga->notes->second}}",
        "{{$raga->notes->third}}",
        "{{$raga->notes->fourth}}",
        "{{$raga->notes->fifth}}",
        "{{$raga->notes->sixth}}",
        "{{$raga->notes->seventh}}"
    ]'
>
    Play Raga
</button>
<button data-transpose="-1">-</button>
<button data-transpose="1">+</button>

<table>
    <tr>
        <td>Arohana</td>
        @foreach ($raga->arohana->list as $swara)
            <td>{{$swara}}</td>
        @endforeach
    </tr>
    <tr>
        <td>Avarohana</td>
        @foreach ($raga->avarohana->list as $swara)
            <td>{{$swara}}</td>
        @endforeach
    </tr>
    <tr>
        <td>Notes</td>
        @foreach ($raga->notes->list as $note)
            <td class="note">{{$note}}3</td>
        @endforeach
    </tr>
    <tr>
        <td>Formula</td>
        @foreach ($raga->formula->list as $interval)
            <td>{{$interval}}</td>
        @endforeach
    </tr>

</table>
