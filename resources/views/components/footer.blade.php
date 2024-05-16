<footer>

    <div class="link-container flex-container">
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

    <div class="flex-container space-between">
        <small>Corrections? <a href="https://github.com/joereynolds/raga-of-the-week/issues">raise an issue</a></small>

        <small class="text-align-right">
            <a href="https://github.com/joereynolds/raga-of-the-week">See the code</a>
        </small>

    </div>

</footer>
