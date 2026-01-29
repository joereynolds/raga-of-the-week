<select>
    @foreach ($varishais as $varishai)
        <option>{{ $varishai->varishai }}</option>
    @endforeach
</select>

<select>
    @foreach ($patterns as $pattern)
        <option>{{ $pattern->pattern_number }}</option>
    @endforeach
</select>
