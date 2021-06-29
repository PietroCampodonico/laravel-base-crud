@extends('layout.default_layout')

@section('page_title', 'My Landing Page')

@section('main_content')

<a href="{{ route('comics.index') }}">Torna alla Home</a>

<form action="{{ route('comics.update', $comic->id) }}" method="post">
@csrf
@method('patch')
    <label for="title">Title</label>
    <input type="text" name="title" id="title" value="{{ $comic->title }}">

    <label for="sale_date">Sold On:</label>
    <input type="date" name="sale_date" id="sale_date" value="{{ $comic->sale_date }}">

    <input type="submit" value="Save">
    <input type="submit" value="Delete">

</form>
@endsection