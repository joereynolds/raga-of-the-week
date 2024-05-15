<h3>Janya Ragas</h3>
<p>Janya ragas are ragas that are derived from the parent raga ({{$raga->name}}).</p>
<p>Here are the Janya ragas for {{$raga->name}}</p>
<ul>
    @forelse($raga->janya as $janya)
        <li>
            <a
                href=" {{
                    route(
                        'raga',
                        ['id' => $janya->raga->id]
                    )
                }}"
            >
                {{ $janya->raga->name }}
            </a>
        </li>
    @empty
        <p>None found :(</p>
    @endforelse
</ul>
