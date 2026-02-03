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

<x-varisai-table />
