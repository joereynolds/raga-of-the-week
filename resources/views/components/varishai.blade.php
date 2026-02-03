<h2>Varisais</h2>

<p>
    A varisai is a sequence played for a raga.
    It's used to practice the raga and improve your technique.
</p>

<div class="flex justify-between">
    <div>
        <button data-varisai-play>Play Varisai</button>
        <button data-stop>Stop</button>
    </div>

    <div>
        <select id="varishai-select" name="varishai"
            hx-get="{{ route('varisai-pattern') }}"
            hx-trigger="change"
            hx-target="#varisai-table"
            hx-swap="outerHTML"
            hx-include="#pattern-select"
            hx-vals='{"raga_id": {{ $raga->id }}}'
            onchange="if (typeof raga !== 'undefined') raga.stop();"
        >
            @foreach ($varishais as $varishai)
                <option value="{{ $varishai->id }}" {{ $loop->first ? 'selected' : '' }}>{{ $varishai->varishai }}</option>
            @endforeach
        </select>

        <select
            id="pattern-select"
            name="pattern"
            hx-get="{{ route('varisai-pattern') }}"
            hx-target="#varisai-table"
            hx-swap="outerHTML"
            hx-trigger="change"
            hx-include="#varishai-select"
            hx-vals='{"raga_id": {{ $raga->id }}}'
            onchange="if (typeof raga !== 'undefined') raga.stop();"
        >
            @foreach ($patterns as $pattern)
                <option value="{{ $pattern->id }}" {{ $loop->first ? 'selected' : '' }}>{{ $pattern->id }}</option>
            @endforeach
        </select>
    </div>

</div>

<div class="mt-4">
    <x-varisai-table :swaras="$swaras" :pattern-id="1" :raga="$raga" />
</div>
