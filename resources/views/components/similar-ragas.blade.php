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
                $thisRagasNotes = [];
                foreach ($raga->arohana as $arohana) {
                    $thisRagasNotes[] = $arohana->swara->note;
                }

                $otherRagasNotes = [];
                foreach ($similarRaga->raga->arohana as $arohana) {
                    $otherRagasNotes[] = $arohana->swara->note;
                }

                $thisRagaDiff  = current(array_diff($thisRagasNotes, $otherRagasNotes));
                $otherRagaDiff = current(array_diff($otherRagasNotes, $thisRagasNotes));

            @endphp
            (Has <strong>{{ $otherRagaDiff }}</strong> instead of <strong>{{ $thisRagaDiff}}</strong>)
        </li>
    @empty
        <p>None found :(</p>
    @endforelse
</ul>
