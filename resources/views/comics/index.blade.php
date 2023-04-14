<table>
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Description</th>
        <th>Price</th>
        <th>Show</th>
    </tr>
    @foreach ($comics as $comic)
        <tr>
            <td>{{ $comic->id }}</td>
            <td>{{ $comic->title }}</td>
            <td>{{ $comic->description }}</td>
            <td>{{ $comic->price }}</td>
            <td><a href="{{ route('comics.show', ['comic' => $comic->id]) }}">Show</a></td>
        </tr>
    @endforeach
</table>