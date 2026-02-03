<h2>Varisais</h2>

<p>
    A varisai is a sequence played for a raga.
    It's used to practice the raga and improve your technique.
</p>

<div id="varisai-controls">
    <select id="varishai-select" name="varishai">
        @foreach ($varishais as $varishai)
            <option value="{{ $varishai->id }}" {{ $loop->first ? 'selected' : '' }}>{{ $varishai->varishai }}</option>
        @endforeach
    </select>

    <select 
        id="pattern-select"
        name="pattern"
        hx-trigger="change"
        hx-target="#varisai-table-container"
        hx-swap="outerHTML"
    >
        @foreach ($patterns as $pattern)
            <option value="{{ $pattern->id }}" 
                    {{ $loop->first ? 'selected' : '' }}
                    hx-get="{{ route('varisai-pattern', ['id' => $varishais->first()->id ?? 1, 'patternId' => $pattern->id]) }}">
                Pattern {{ $pattern->id }}
            </option>
        @endforeach
    </select>
</div>

<x-varisai-table :swaras="$swaras" :pattern-id="1" />
