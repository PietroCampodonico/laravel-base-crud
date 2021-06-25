<a href="{{ route('comics.create') }}">Add your comic...</a>

<table>
    <thead>
        <tr>
            <th>id</th>
            <th>Title</th>
            <th>Release Date</th>
            <th></th>
        </tr>
    </thead>

    <tbody>
        @foreach($comics as $comic)
        <tr>
            <td>{{ $comic->id }}</td>
            <td>{{ $comic->title }}</td>
            <td>{{ $comic->sale_date }}</td>
            <td><a href="{{ route('comics.show', $comic->id) }}">Details...</a></td>
            <td><a href="{{ route('comics.edit', $comic->id) }}">Edit...</a></td>
            <td><form action="{{ route('comics.destroy', $comic) }}" method="post">
                @csrf
                @method('delete')
                <input type="submit" value="Cancel">
            </form></td>


        </tr>
        @endforeach
    </tbody>

</table>
