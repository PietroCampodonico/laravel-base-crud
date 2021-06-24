<a href="{{ route('comics.index') }}">Torna alla home</a>

<ul>
    <li>ID: {{ $comic->id }}</li>
    <li>TITLE: {{ $comic->title }}</li>
    <li>RELEASE DATE: {{ $comic->sale_date }}</li>
    <li>CREATION DATE: {{ $comic->created_at }}</li>
    <li>LAST UPDATE: {{ $comic->updated_at }}</li>
</ul>
