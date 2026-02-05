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
            <a
                class="cursor-pointer"
                hx-on:click="document.getElementById('issue').classList.toggle('hidden')"
            >
                Raise an issue
            </a>
        </div>

        <div>
            <a href="{{ route('weeks', ['id' => $previousRagaId])}}" >
                Previous weeks
            </a>
        </div>

        <div>
            <a
                href="https://github.com/joereynolds/raga-of-the-week"
                target="_blank"
                rel="noopener noreferrer"
            >
                See the code
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="size-4 inline"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M13.5 6H5.25A2.25 2.25 0 0 0 3 8.25v10.5A2.25 2.25 0 0 0 5.25 21h10.5A2.25 2.25 0 0 0 18 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25"
                    />
                </svg>

            </a>
        </div>
    </div>

    <x-issue :raga="$raga"/>

</footer>
