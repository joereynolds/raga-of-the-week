<h2>Varisais</h2>

<p>
  A varisai is a sequence played for a raga.
  It's used to practice the raga and improve your technique.
</p>


<select>
    @foreach ($varishais as $varishai)
        <option>{{ $varishai->varishai }}</option>
    @endforeach
</select>

<select>
    @foreach ($patterns as $pattern)
        <option>{{ $pattern->id }}</option>
    @endforeach
</select>

@php
// assuming varishai of Sarali on first pattern for now
$swaras = \App\Models\VarishaiPatternSwara::where("varishai_pattern_id", 1)->get();
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
