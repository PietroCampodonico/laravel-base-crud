@extends('layout.default_layout')

@section('page_title', 'My Landing Page')

@section('main_content')

<form action="{{ route('comics.store') }}" method="post">
    @csrf

    <label for="title">Title</label>
    <input type="text" name="title" id="title">

    <label for="sale_date">Sold on</label>
    <input type="date" name="sale_date" id="sale_date">

    <input type="submit" value="Confirm">
</form>
@endsection
