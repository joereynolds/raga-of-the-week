<x-layout>

    <div>
        <table>
        @foreach ($issues as $issue)
            <tr>
                <td>{{ $issue->description }}</td>
            </tr>
        @endforeach
        </table>
    </div>

</x-layout>
