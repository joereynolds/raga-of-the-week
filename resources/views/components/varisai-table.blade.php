<div id="varisai-table">
    @php
    if (!$swaras) {
        $swaras = \App\Models\VarishaiPatternSwara::where("varishai_pattern_id", $patternId ?? 1)->get();
    }
    @endphp

    <table class="text-sm w-full">
            @foreach ($swaras->chunk(8) as $chunk)
                <tr>
                    @foreach ($chunk as $swara)
                        <td>{{ $swara->swaraRelativeNotation->notation }}</td>
                    @endforeach
                </tr>
            @endforeach
    </table>
</div>
