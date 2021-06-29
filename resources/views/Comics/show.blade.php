@extends('layout.default_layout')

@section('page_title', 'My Landing Page')

@section('main_content')

<a href="{{ route('comics.index') }}">Torna alla home</a>

<ul>
    <li>ID: {{ $comic->id }}</li>
    <li>TITLE: {{ $comic->title }}</li>
    <li>DESCRIPTION: {{ $comic->description }}</li>
    <li>THUMB: {{ $comic->thumb }}</li>
    <li>PRICE: {{ $comic->price }}</li>
    <li>SERIES: {{ $comic->series }}</li>
    <li>RELEASE DATE: {{ $comic->sale_date }}</li>
    <li>TYPE: {{ $comic->type }}</li>
    <li>CREATION DATE: {{ $comic->created_at }}</li>
    <li>LAST UPDATE: {{ $comic->updated_at }}</li>
</ul>
@endsection
