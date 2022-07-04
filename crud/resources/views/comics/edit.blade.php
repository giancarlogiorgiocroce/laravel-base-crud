@extends('layouts.main')

@section('title', 'Edit')
@section('content')
    <h1>Edit</h1>
    <form action="{{ route('comics.update', $comic) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="title">Titolo</label>
            <input type="text"
                class="form-control @error('title') is-invalid @enderror"
                name="title" id="title"
                placeholder="Inserisci il titolo"
                value="{{ old('title', $comic->title) }}"
            >
            @error('title')
                <p class="error-msg">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group">
            <label for="image">Immagine</label>
            <input type="text"
                class="form-control @error('image') is-invalid @enderror"
                name="image" id="image"
                placeholder="Inserisci l'URL immagine"
                value="{{ old('image', $comic->image) }}"
            >
            @error('image')
                <p class="error-msg">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group">
            <label for="type">Tipo</label>
            <input type="text"
                class="form-control @error('type') is-invalid @enderror"
                name="type" id="type"
                placeholder="Inserisci il tipo di fumetto"
                value="{{ old('type', $comic->type) }}"
            >
            @error('type')
                <p class="error-msg">{{ $message }}</p>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>

    </form>
@endsection
