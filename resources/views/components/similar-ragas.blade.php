<h3>Similar Ragas</h3>
<p>A similar raga is one that differs by only one note</p>
<p>Here's a list of closely related ragas</p>

<ul>
    @forelse($raga->similarRaga as $similarRaga)
        <li>
            <a href=" {{ route('raga', ['id' => $similarRaga->raga->id]) }}">
                {{ $similarRaga->raga->name }}
            </a>
            @php
                $thisRagaDiff  = current(array_diff($raga->notes->list, $similarRaga->raga->notes->list));
                $otherRagaDiff = current(array_diff($similarRaga->raga->notes->list, $raga->notes->list));
            @endphp
            (Has <strong>{{ $otherRagaDiff }}</strong> instead of <strong>{{ $thisRagaDiff}}</strong>)
        </li>
    @empty
        <p>None found :(</p>
    @endforelse
</ul>
