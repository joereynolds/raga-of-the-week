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

$p = \App\Models\VarishaiPattern::find(1);
dump($p);

@endphp

<table class="text-sm w-full">
    <tr>
        <td>Arohana</td>
        <td>Arohana</td>
        <td>Arohana</td>
        <td>Arohana</td>
        <td>Arohana</td>
        <td>Arohana</td>
        <td>Arohana</td>
    </tr>
</table>
