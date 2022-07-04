@extends('layouts.main')

@section('title', 'Index')
@section('content')
    <h1>Questo è un elenco bruttissimo</h1>
    <h3>di tutti i fumetti della collezione</h3>
    <div class="container">

        @if(session('messaggio-cancellazione'))
            <div class="alert alert-success">
                {{ session('messaggio-cancellazione') }}
            </div>
        @endif

        <div class="row d-flex justify-content-center">

            @foreach ($comics as $comic)
                <ul class="col-3 text-center">
                    <li>Numero: {{$comic->id}}</li>
                    <li><strong>{{$comic->title}}</strong></li>
                    <li><img src="{{$comic->image}}" alt="{{$comic->title}}"></li>
                    <li>Tipo: {{$comic->type}}</li>
                    <li>
                        <a class="btn btn-primary" href="{{route('comics.show', $comic)}}">Altre info</a>
                        <form class="d-inline" action="{{route('comics.destroy', $comic)}}" method="POST" onsubmit="return confirm('Sei sicuro di voler eliminare {{ $comic->title }}?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger">Elimina</button>
                        </form>
                        <a class="btn btn-success" href="{{ route('comics.edit', $comic) }}">Aggiorna</a>
                    </li>
                </ul>
            @endforeach

        </div>

    </div>
@endsection
