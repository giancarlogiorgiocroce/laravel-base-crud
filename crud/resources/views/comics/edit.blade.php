@extends('layouts.main')

@section('title', 'Edit')
@section('content')
    <h1>Edit</h1>
    <form action="{{ route('comics.update', $comic) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
          <label for="title">Titolo</label>
          <input type="text" class="form-control" name="title" id="title" placeholder="Inserisci il titolo">
        </div>
        <div class="form-group">
          <label for="image">Immagine</label>
          <input type="text" class="form-control" name="image" id="image" placeholder="Inserisci l'URL immagine">
        </div>
        <div class="form-group">
          <label for="type">Tipo</label>
          <input type="text" class="form-control" name="type" id="type" placeholder="Inserisci il tipo di fumetto">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
