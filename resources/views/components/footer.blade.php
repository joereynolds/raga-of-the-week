<footer class="text-sm">

    <div class="flex justify-between bg-orange-100 p-3 px-4">
        @if ($previousRagaId)
            <div>
                <a href="{{ route('raga', ['id' => $previousRagaId])}}" >
                    Previous
                </a>
            </div>
        @endif

        <div>
            <a href="{{ route('random') }}">Random Raga</a>
        </div>

        @if ($nextRagaId)
            <div>
                <a href="{{ route('raga', ['id' => $nextRagaId])}}" >
                    Next
                </a>
            </div>
        @endif

    </div>

    <div class="flex justify-between mt-4">
        <div>
            Corrections?
            <a href="https://github.com/joereynolds/raga-of-the-week/issues">
                raise an issue
            </a>
        </div>

        <div>
            <a href="https://github.com/joereynolds/raga-of-the-week">
                See the code
            </a>
        </div>
    </div>

</footer>
