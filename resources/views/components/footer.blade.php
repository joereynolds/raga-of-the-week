<footer>

    <div class="flex justify-between bg-orange-100 p-3 px-4">
        @if ($previousRagaId)
            <div>
                <a href="{{ route('raga', ['id' => $previousRagaId])}}" >
                    Previous
                </a>
            </div>
        @endif

        <div class="text-center">
            <a href="{{ route('random') }}">Random Raga</a>
        </div>

        @if ($nextRagaId)
            <div class="text-right">
                <a href="{{ route('raga', ['id' => $nextRagaId])}}" >
                    Next
                </a>
            </div>
        @endif

    </div>

    <div class="flex justify-between">
        <small>Corrections? <a href="https://github.com/joereynolds/raga-of-the-week/issues">raise an issue</a></small>

        <small class="text-right">
            <a href="https://github.com/joereynolds/raga-of-the-week">See the code</a>
        </small>
    </div>

</footer>
