<footer>

    @if ($previousRagaId)
        <div>
            <a
                href="{{ route('raga', ['id' => $previousRagaId])}}"
            >
                Previous
            </a>
        </div>
    @endif

    @if ($nextRagaId)
        <div>
            <a
                href="{{ route('raga', ['id' => $nextRagaId])}}"
            >
                Next
            </a>
        </div>
    @endif

    <div>
        <a href="{{ route('random') }}">Random Raga</a>
    </div>

    <div>
        <small>Corrections? Please <a>Email me</a></small>
    </div>

</footer>
