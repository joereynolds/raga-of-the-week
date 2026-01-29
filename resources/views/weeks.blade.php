<x-layout>
    <h1>Previous Weeks</h1>

    @foreach ($weeks as $week)
        <div class="flex justify-between p-4 bg-orange-100 mb-4">
            <a
                href=" {{
                    route(
                        'raga',
                        ['id' => $week->raga->id]
                    )
                }}"
            >
                {{ $week->week }}
            </a>

            <a
                href=" {{
                    route(
                        'raga',
                        ['id' => $week->raga->id]
                    )
                }}"
            >
                {{ $week->raga->name }}
            </a>
        </div>
    @endforeach

    </ul>
</x-layout>
