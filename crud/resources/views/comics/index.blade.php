@extends('layouts.main')

@section('title', 'Index')
@section('content')
    <h1>Questo è un elenco bruttissimo</h1>
    <h3>di tutti i fumetti della collezione</h3>
    @foreach ($comics as $comic)
        <ul>
            <li>Numero: {{$comic->id}}</li>
            <li><strong>{{$comic->title}}</strong></li>
            <li><img src="{{$comic->image}}" alt="{{$comic->title}}"></li>
            <li>Tipo: {{$comic->type}}</li>
            <li><a href="{{route('comics.show', $comic)}}">Altre info</a></li>
        </ul>
    @endforeach
@endsection
