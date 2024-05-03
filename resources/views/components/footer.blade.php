<footer>

    <div class="flex-container">
        @if ($previousRagaId)
            <div>
                <a href="{{ route('raga', ['id' => $previousRagaId])}}" >
                    Previous
                </a>
            </div>
        @endif

        <div class="text-align-center">
            <a href="{{ route('random') }}">Random Raga</a>
        </div>

        @if ($nextRagaId)
            <div class="text-align-right">
                <a href="{{ route('raga', ['id' => $nextRagaId])}}" >
                    Next
                </a>
            </div>
        @endif

    </div>

    <div>
        <small>Corrections? Please <a>Email me</a></small>
    </div>

</footer>
