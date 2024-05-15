@foreach($ragas as $raga)

    <h2>{{ $raga->name }}</h2>

    @if (!$raga->isJanya)
        <p>{{$raga->name}} is number {{$raga->id}} of the Melakarta ragas.</p>
    @endif

    <x-raga-table :raga="$raga"/>

    @isset ($raga->alsoKnownAs->westernScale)
        <p>In the western world it is known as the <strong>{{ $raga->alsoKnownAs->westernScale->name}}</strong> scale/mode.
    @endisset

    @if ($raga->isJanya)
        @php
            $id = App\Models\MelakartaJanyaLink::where('janya_id', $raga->id)->first()->raga_id;
            $parent = App\Models\Raga::find($id);
        @endphp
        <p>This particular raga is a janya meaning it is a descendant of a parent raga</p>
        <p>
            Its parent is
            <a href=" {{ route('raga', ['id' => $id]) }}">
                {{ $parent->name }}
            </a>
        </p>
    @endif

    @if (!$raga->isJanya)
        <x-janya-ragas :raga="$raga"/>
    @endif

    <x-similar-ragas :raga="$raga"/>
@endforeach
<x-footer :previousRagaId="$raga->previous" :nextRagaId="$raga->next"></x-footer>
