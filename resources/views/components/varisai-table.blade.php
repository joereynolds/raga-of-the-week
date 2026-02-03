<div id="varisai-table" 
     data-notes='[
         @php $first = true; @endphp
         @foreach ($swaras as $swara)
             @php
                 $actualSwara = $swara->swaraRelativeNotation->getSwaraForRaga($raga);
             @endphp
             @if($actualSwara)
                 {{ $first ? '' : ',' }}
                 "{{ $actualSwara->note }}{{ $actualSwara->scientific_pitch }}"
                 @php $first = false; @endphp
             @endif
         @endforeach
     ]'>
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
