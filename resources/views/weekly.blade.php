<x-layout>
    <h1>Raga of the week</h1>

    <p>Welcome!</p>
    <p>Raga of the week shows a different Melakarta raga each week.</p>
    <p>This week's <strong>raga of the week</strong> is...</p>


    @include('raga', ['ragas' => $ragas])
</x-layout>
