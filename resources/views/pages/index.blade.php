@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')
    <ul class="container d-flex row-cols-3 flex-wrap justify-content-between mt-5">
        @foreach ($movies as $movie)
            <li class="mb-4 ">
                <div>Titolo: {{ $movie->title }}</div>
                <div>Titolo Originale: {{ $movie->original_title }}</div>
                <div>Nazionalita: {{ $movie->nationality }}</div>
                <div>Data di uscita: {{ $movie->date }}</div>
                <div>Voto: {{ $movie->vote }}</div>
            </li>
        @endforeach
    </ul>
@endsection
