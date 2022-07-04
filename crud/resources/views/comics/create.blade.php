@extends('layouts.main')

@section('title', 'Create')
@section('content')

    @if ($errors->any())
        <div>
            <ul class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <h1>Create</h1>
    <form action="{{ route('comics.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="title">Titolo</label>
            <input type="text"
                class="form-control @error('title') is-invalid @enderror"
                name="title" id="title"
                placeholder="Inserisci il titolo"
                value="{{ old('title') }}"
            >
            @error('title')
                <p class="error-msg"> {{$message}} </p>
            @enderror
        </div>

        <div class="form-group">
            <label for="image">Immagine</label>
            <input type="text"
                class="form-control @error('image') is-invalid @enderror"
                name="image" id="image"
                placeholder="Inserisci l'URL immagine"
                value="{{ old('image') }}"
            >
            @error('image')
                <p class="error-msg"> {{$message}} </p>
            @enderror
        </div>

        <div class="form-group">
            <label for="type">Tipo</label>
            <input type="text"
                class="form-control @error('type') is-invalid @enderror"
                name="type" id="type"
                placeholder="Inserisci il tipo di fumetto"
                value="{{ old('type') }}"
            >
            @error('type')
                <p class="error-msg"> {{$message}} </p>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>

    </form>
@endsection
