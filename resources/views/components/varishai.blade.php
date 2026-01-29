<select>
    @foreach ($varishai->all() as $v)
        <option>{{ $v->varishai }}</option>
    @endforeach
</select>
