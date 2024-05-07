<h3 class="border-bottom">Janya Ragas</h3>
<p>Janya ragas are ragas that are derived from the parent raga ({{$raga->name}}).</p>
<p>Here are the Janya ragas for {{$raga->name}}</p>
<ul>
    @forelse($raga->janya as $janya)
        <li>
            <a
                href=" {{
                    route(
                        'raga',
                        ['id' => App\Models\Raga::find($janya->janya_id)->id]
                    )
                }}"
            >
                {{ App\Models\Raga::find($janya->janya_id)->name }}
            </a>
        </li>
    @empty
        <p>None found :(</p>
    @endforelse
</ul>
