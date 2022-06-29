@extends('layouts.main')

@section('title', 'Index')
@section('content')
    <h1>Questo è un elenco bruttissimo</h1>
    <h3>di tutti i fumetti della collezione</h3>
    @foreach ($comics as $comic)
        <ul>
            <li>{{$comic->id}}</li>
            <li>{{$comic->title}}</li>
            <li><img src="{{$comic->image}}" alt="{{$comic->title}}"></li>
            <li>{{$comic->type}}</li>
        </ul>
    @endforeach
@endsection
